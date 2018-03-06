console.log("gay");

const Assignment = document.getElementById('Assignment');
let myAnswer = document.getElementById('myAnswer');

function makeSum()
{
  let nummer1 = Math.floor(Math.random() * 9) + 1;
  let nummer2 = Math.floor(Math.random() * 9) + 1;
  Answer = nummer1 + nummer2
  document.getElementById('Assignment').innerHTML = nummer1 + " X " + nummer2 /*+ " = " + Answer */;
}

myAnswer.addEventListener('keydown', (oof)=>
{
  console.log(oof);
  if(oof.keyCode ==13)
  {
    if (eval(Answer) == myAnswer.value)
    {
      feedback.src = "img/goed.png";
      sound.src = "audio/S.wav";
      sound.play();
    }
    else if (eval(Answer) != myAnswer.value)
    {
      feedback.src = "img/fout.gif";
      sound.src = "audio/BEGONETHOT.wav";
      sound.play();
    }
    window.setTimeout(waiting, 2000);
  }
});


function waiting()
{

}

makeSum();
