<?php
use Slim\Http\Request;
use Slim\Http\Response;
use simplon\entities\Person;
use simplon\dao\DaoPerson;
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