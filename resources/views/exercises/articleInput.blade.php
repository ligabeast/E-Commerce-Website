<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<script>
   const form = document.createElement('form');
   form.action = '/sell/set_article/list';
   form.method = 'post';
   const csrf = document.createElement('input');
   csrf.name = "_token";
   csrf.hidden = true;
   csrf.value = "{{csrf_token()}}";
   const kategorie = document.createElement('input');
   kategorie.type = 'text';
   kategorie.name='category';
   const name = document.createElement('input');
   name.type = 'text';
   name.name='title';
   const preis = document.createElement('input');
   preis.type = 'text';
   preis.name='price';
   const beschreibung = document.createElement('input');
   beschreibung.type = 'text';
   beschreibung.name='description';
   const zustand = document.createElement('input');
   zustand.type = 'text';
   zustand.name='state';
   const button = document.createElement('input');
   button.type='submit';

   form.append(kategorie,csrf,name,preis,beschreibung,zustand,button);
   document.body.appendChild(form);

</script>

</body>
</html>
