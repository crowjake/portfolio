function toggle(event) {
  const parent = event.target.parentNode.parentNode;
  parent.classList.toggle('expanded');

  if (event.target.innerHTML === "listen"){
    event.target.innerHTML = "hide player";
  } else {
    event.target.innerHTML = "listen";

    var frames = window.frames;
  }
};
