<!DOCTYPE>
<html>
    <head>
        
        <meta charset ="UTF-8">
        
        <title> inscription </title>
        <link rel ="stylesheet" href="style.css">

    </head>
    <body>
    

     <div class="container">
     
         <!-- </selection>  -->
      
         <div class="form2">
          <form action="traitement.php" method="post">
            <h1>Inscription</h1>
             <p>votre chaufeur en un clic</p>
             <label for="prenom">Prenom</label>
              <input type="text" name="prenom" placeholder="prenom">
              <label for="nom"> Nom</label>
              <input type="text" name="nom" placeholder="nom">
               <label for="email"> Email</label>
               <input type="email" name="mail" placeholder="email">
               <label for="tel"> Tel </label>
               <input type="number" name="tel" placeholder="tel">
               <label for="password">passeword </label>
               <input type="password" name="password" placeholder="password">

                  <input type="submit" name="inscription"value="Inscription" class="buton3">
                  <!-- <a href="index2.php" type="submit" name="inscription" class="buton3">s'inscrire -></a> -->
                 </form>
         </div>
     </div>

    </body>
</html>