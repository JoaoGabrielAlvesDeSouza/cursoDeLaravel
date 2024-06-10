<h1> Como rodar </h1>
<li>
    <ul> git clone "https://github.com/JoaoGabrielAlvesDeSouza/cursoDeLaravel" </ul>
    <ul> Dentro da pasta do projeto: composer install </ul>
    <ul> php artisan generate:key --ansi </ul>
    <ul> Depois de ter configurado o banco de dados: php artisan migrate (ou migrate:fresh se já houver alguma migration no banco, lembrando que isso apagará tudo no banco) </ul>
    <ul> php artisan serve </ul>
</li>

<h1> Rotas </h1>

<h4> Buscar todos os usuários: /api </h4>
<h4> Buscar por id: /api/find/id </h4>
<h4> Fazer um post: /api/store: 

``` 
{
    "id": "numeric",
    "name": "required|min:5",
    "email": "email",
    "age": "gte:13",
    "gender": "required" 
}
            
``` 

</h4>
