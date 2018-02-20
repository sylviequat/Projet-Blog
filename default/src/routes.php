<?php
use Slim\Http\Request;
use Slim\Http\Response;
use simplon\entities\Person;
use simplon\entities\Article;
use simplon\dao\DaoPerson;
use simplon\dao\DaoArticle;
// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    //On instancie le dao
    $dao = new DaoPerson();
    //On récupère les Persons via la méthode getAll
    $persons = $dao->getAll();
    //On passe les persons à la vue index.twig
    return $this->view->render($response, 'index.twig', [
        'persons' => $persons
    ]);

})->setName('index');

$app->get('/personArticle/{id}', function (Request $request, Response $response, array $args) {

$dao = new DaoArticle();
$doa = new DaoPerson();

$person = $doa->getById($args['id']);

$articles = $dao->getByPerson($args['id']);
    return $this->view->render($response, 'personArticle.twig',[
        'articles' => $articles,
        'person' => $person
        ]);

})->setName('personArticle');



$app->get('/blog', function (Request $request, Response $response, array $args) {
    return $this->view->render($response, 'blog.twig');
})->setName('blog');
$app->post('/blog', function (Request $request, Response $response, array $args) {
    //On récupère les données du formulaire
    $form = $request->getParsedBody();
    //On crée une Person à partir de ces données
    $newPerson = new Person($form['name'], $form['email'], $form['password']);
    //On instancie le DAO
    $dao = new DaoPerson();
    //On utilise la méthode add du DAO en lui donnant la Person qu'on vient de créer
    $dao->add($newPerson);
    //On affiche la même vue que la route en get
    return $this->view->render($response, 'blog.twig', [
        'newId' => $newPerson->getId()
    ]);
})->setName('blog');

