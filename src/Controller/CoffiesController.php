<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace App\Controller;
use App\Model\coffiesManager;
use App\Model\categoryManager;

/**
 * Class coffiesController
 *
 */
class coffiesController extends AbstractController
{

    /**
     * Display coffies listing
     *
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function index()
    {

        $coffiesManager = new coffiesManager();
        $coffies = $coffiesManager->selectAll();

        $categoryManager = new categoryManager();
        $category = $categoryManager->selectAll();


        return $this->twig->render('Coffie/index.html.twig', ['coffies' => $coffies, 'category' => $category]);
    }



    /**
     * Display coffies informations specified by $id
     *
     * @param int $id
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function show(int $id)
    {
        $coffiesManager = new coffiesManager();
        $coffies = $coffiesManager->selectOneById($id);

        $categoryManager = new categoryManager();
        $category = $categoryManager->selectAll();

        return $this->twig->render('coffie/show.html.twig', ['coffies' => $coffies, 'category' => $category]);
    }



    public function showByCat(int $category_id)
    {
        $coffiesManager = new coffiesManager();
        $coffies = $coffiesManager->selectBycat($category_id);
        $categoryManager = new categoryManager();
        $category = $categoryManager->selectAll();

        return $this->twig->render('coffie/showByCat.html.twig', ['coffies' => $coffies, 'category' => $category]);
    }


  /**
     * Display item edition page specified by $id
     *
     * @param int $id
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
  
    public function edit(int $id): string

    {  

        $coffiesManager = new coffiesManager();
        $coffies = $coffiesManager->selectOneById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $coffies['name'] = $_POST['name'];
            $coffies['image'] = $_POST['image'];
            $coffies['details'] = $_POST['details'];
            $coffies['acidity'] = $_POST['acidity'];
            $coffies['caffeine'] = $_POST['caffeine'];
            $coffies['flavor'] = $_POST['flavor'];
            $coffies['origin'] = $_POST['origin'];

            $coffies['more'] = $_POST['more'];
            $coffies['price'] = $_POST['price'];
            $coffies['imageOrigin'] = $_POST['imageOrigin'];

            $coffies['imageA'] = $_POST['imageA'];
            $coffies['imageB'] = $_POST['imageB'];

            $coffies['category_id'] = $_POST['category_id'];
            $coffiesManager->update($coffies);
        }

        return $this->twig->render('Coffie/edit.html.twig', ['coffies' => $coffies]);
    }

    /**
     * Display coffies creation page
     *
     * @return string
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function add()
    { $categoryManager = new categoryManager();
        $category = $categoryManager->selectAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $coffiesManager = new coffiesManager();
            $coffies = [
                'name' => $_POST['name'],
                'image' => $_POST['image'],
                'details' => $_POST['details'],
                'acidity' => $_POST['acidity'],
                'caffeine' => $_POST['caffeine'],
                'flavor' => $_POST['flavor'],
                'origin' => $_POST['origin'],

                'more' => $_POST['more'],
                'price' => $_POST['price'],
                'imageOrigin' => $_POST['imageOrigin'],

                 'imageA' => $_POST['imageA'],
                'imageB' => $_POST['imageB'],


                'category_id' => $_POST['category_id'],
            ];

        
            $id = $coffiesManager->insert($coffies);
            header('Location:/coffies/show/' . $id);
        }

        return $this->twig->render('coffie/add.html.twig', ['category' => $category]);
    }


    /**
     * Handle item deletion
     *
     * @param int $id
     */
    public function delete(int $id)
    {
        $coffiesManager = new  coffiesManager();
        $coffiesManager->delete($id);
        header('Location:/coffies/index');
    }



   /* public function InnerJoin(int $coffies): array
    {   $coffiesManager = new coffiesManager();
        $coffies = $coffiesManager->InnerJoinSelectTable($coffies);
        header('Location:/coffies/index');
    }*/
}
