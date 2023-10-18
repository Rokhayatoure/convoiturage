<!DOCTYPE>
<html>
    <head>
        
        <meta charset ="UTF-8">
        
        <title> inscription </title>
        <link rel ="stylesheet" href="style.css">

    </head>
    <body>

     <div class="container">
     <div class="form1">
      <form action=" formulair ">
        <h1>Inscription </h1>
         <p>votre chaufeur en un clic </p>
         <input type="submit"  class ="buton1"name="facebook" value="continuer avec facebook">
     <hr class="hr1">
     <hr class="hr2">
         <label for="email"> Email</label>
           <input type="email" class="mail" name="email" placeholder="email">
         
         <label for="password">  mot de passe</label>
         <input type="password"class="password" name="password" placeholder="password">
         <i class="uil uil-loock"></i>
           <i class="uil uil-eye-slash showhiedepw"></i>
         <label for="inscription"> j'ai deja un compte </label>
         <a href="#"class="btn-inscription">s'inscrire -></a>
           </form>
     </div>
         <!-- </selection>  -->
         
         <div class="form2">
          <form action="inscription">
            <h1>Bienvenue</h1>
             <p>finaliser votre inscription en rensegnant les informations manquante  </p>
             <label for="prenom">Prenom</label>
              <input type="text" name="prenom" placeholder="prenom">
              <label for="nom"> Nom</label>
              <input type="text" name="nom" placeholder="nom">
               <label for="email"> Email</label>
               <input type="email" name="mail" placeholder="email">
               <label for="tel"> Tel </label>
               <input type="number" name="tel" placeholder="tel">
                  <input type="submit" name="inscription"value="Inscription" class="buton3">
                 </form>
         </div>
     </div>

    </body>
</html>