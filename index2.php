<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel ="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
<div class="form1">
      <form action="traitement.php" method="post">
        <h1>Bienvenue </h1>
         <p>inscriver vous a notre pages  </p>
         <input type="submit"  class ="buton1"name="facebook" value="continuer avec facebook">
     <hr class="hr1">
     <hr class="hr2">
         <label for="email"> Email</label>
           <input type="email" class="mail" name="mail" placeholder="email">
         
         <label for="password">  mot de passe</label>
         <input type="password"class="password" name="password" placeholder="password">
         <i class="uil uil-loock"></i>
           <i class="uil uil-eye-slash showhiedepw"></i>
         <label for="inscription"> j'ai deja un compte </label>
         <!-- <a  href="" type="submit" class="btn-inscription" name="connection">s'inscrire -></a> -->
         <button type="submit" class="btn-inscription" name="connection">s'inscrire -></button>
           </form>
     </div>
</body>
</html>