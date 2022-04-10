<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style/styleNav.css">
   </head>
<body>
  <nav>
    <div class="nav-content">
      <div class="logo">
        <a href="#">Logo</a>
      </div>
      <ul class="nav-links">
        <li><a href="#">Return</a></li>
      </ul>
    </div>
  </nav>
  <script>
  let nav = document.querySelector("nav");
    window.onscroll = function() {
      if(document.documentElement.scrollTop > 20){
        nav.classList.add("sticky");
      }else {
        nav.classList.remove("sticky");
      }
    }
  </script>

</body>
</html>

