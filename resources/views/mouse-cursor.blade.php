<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Custom Cursor with Logo & Auto Color Change</title>
<style>
  body {
    
    margin: 0;
    height: 100vh;
    /* background: #fff; */
  }

  .custom-cursor {
    position: fixed;
    top: 0; left: 100px; 
    bottom: 50px;
    width: 50px;
    height: 50px; /* Changed to square, better for logo */
    pointer-events: none;
    background: url('images/mouse-cursor.png') no-repeat center center;
    background-size: contain;
    border-radius: 14px;
    /* transform: translate(-50%, -50%); */
    transition: box-shadow 0.4s ease;
    z-index: 9999;
  }

  body.desktop-mode {
      cursor: none;
    }
</style>
</head>
<body>

<div class="custom-cursor"></div>

<script>
  const cursor = document.querySelector('.custom-cursor');
  let hue = 0;

  window.addEventListener('mousemove', e => {
    cursor.style.left = e.clientX + 'px';
    cursor.style.top = e.clientY + 'px';
  });

//   function animateColor() {
//     hue = (hue + 1) % 360; // Increment hue, loop back to 0 after 360
//     const borderColor = `hsl(${hue}, 100%, 60%)`;
//     const glowColor = `hsl(${hue}, 100%, 70%)`;

//     cursor.style.border = `2px solid ${borderColor}`;
//     cursor.style.boxShadow = `0 0 10px 3px ${glowColor}`;

//     requestAnimationFrame(animateColor);
//   }

  animateColor();
</script>

</body>
</html>
