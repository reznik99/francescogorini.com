//size of window
var WIDTH, HEIGHT;
//array of dots
var dots = [];
var size;
//location of pull
var centerOfGravity;
//time for random gravity
var n, lastUserClick;

function setup() {
	//init
	WIDTH = windowWidth;
	HEIGHT = windowHeight;
	createCanvas(WIDTH, HEIGHT);
	background(255);
	frameRate(30);
	//set size and create dots
	size = 250;
	for(var i=0;i<size;i++){
	  dots[i] = new Dot(random(WIDTH), random(HEIGHT), 1, 1);
	}
	n = lastUserClick = millis();
}

function draw() {
	background(255);
	for(var i=0;i<dots.length;i++){
		dots[i].update();
	}
	if(millis() - lastUserClick > 5250){
		centerOfGravity=null;
		lastUserClick = millis();
	}
	if(millis() - lastUserClick > 5000){
		n = millis();
		if(centerOfGravity==null){
			centerOfGravity = new p5.Vector(random(WIDTH), random(HEIGHT));
		}
	}
}

function windowResized(){
	resizeCanvas(windowWidth, windowHeight);
}

function mousePressed(){
	lastUserClick = millis();
	centerOfGravity = new p5.Vector(mouseX, mouseY);
}

function mouseReleased(){
	lastUserClick = millis()
	centerOfGravity = null;
}

function Dot(x, y){
	this.x = x;
	this.y = y;
	this.vx = 0;
	this.vy = 0;
	this.size = random(5)+3;
	this.color = 70;
	
	this.update = function(){
		this.collisionCheck();
		if(centerOfGravity!=null){
			var dx = this.x - centerOfGravity.x;
			var dy = this.y - centerOfGravity.y;
			var angle = atan2(dy, dx);
			this.vx -= cos(angle)/4;
			this.vy -= sin(angle)/4;
		}
		
		this.x+=this.vx;
		this.y+=this.vy;
		this.vx*=1-(this.size/100/5);
		this.vy*=1-(this.size/100/5);//friction is dependent on size
		this.draw();
	}
	
	this.draw = function(){
		stroke(this.color);
		fill(this.color);
		ellipse(this.x, this.y, this.size, this.size);
	}
	
	this.collisionCheck = function(){
		//if out of bounds, reverse vel and apply resistance
		if(this.x >= WIDTH || this.x <= 0){
			this.vx*=-0.95;
		}
		if(this.y >= HEIGHT || this.y <= 0){
			this.vy*=-0.95;
		}
	}
}