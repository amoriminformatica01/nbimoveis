 <style>
     .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         user-select: none;
     }

     @media (min-width: 768px) {
         .bd-placeholder-img-lg {
             font-size: 3.5rem;
         }
     }

     html,
     body {
         height: 100%;
     }

     body {
         display: flex;
         align-items: center;
         padding-top: 40px;
         padding-bottom: 40px;
         background-color: #f5f5f5;
     }

     .form-signin {
         width: 100%;
         max-width: 330px;
         padding: 15px;
         margin: auto;
     }

     .form-signin .checkbox {
         font-weight: 400;
     }

     .form-signin .form-floating:focus-within {
         z-index: 2;
     }

     .form-signin input[type="email"] {
         margin-bottom: -1px;
         border-bottom-right-radius: 0;
         border-bottom-left-radius: 0;
     }

     .form-signin input[type="password"] {
         margin-bottom: 10px;
         border-top-left-radius: 0;
         border-top-right-radius: 0;
     }
 </style>


 <!-- Custom styles for this template -->
 <link href="signin.css" rel="stylesheet">
 </head>

 <body class="text-center">

     <main class="form-signin">
         <form id="login" method="POST">
             <h1 class="h3 mb-3 fw-normal">Login</h1>

             <div class="form-floating p-3">
                 <input type="email" class="form-control" id="floatingInput" name="email" placeholder="SeuEmail@example.com">
             </div>
             <div class="form-floating p-3">
                 <input type="password" class="form-control" id="floatingPassword" name="senha" placeholder="Sua Senha">
             </div>

             <div class="checkbox mb-3">
                 <label>
                     <input type="checkbox" value=">lembrar-me">Lembrar - me
                 </label>
             </div>
             <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
             <p class="mt-5 mb-3 text-muted">&copy; NB Im??veis <?=date('Y')?></p>
         </form>
     </main>