//var bg;
var g;

//function preload(){
//  bg = loadImage("img/bkimg.png");
//}

function setup() {
  createCanvas(1920, 1080);
  //background(255);
  //img = loadImage("img/bkimg.png");
}

function draw() {
  //background(bg)
  noFill();
  g = random(100, 230);
  fill(0,g,0);
  strokeWeight(1);
  text('settler', mouseX, mouseY, 100, 100);
  //image(img, 0, 0);
}
