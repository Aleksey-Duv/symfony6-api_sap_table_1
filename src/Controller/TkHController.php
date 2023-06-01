<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\ZtinmmTkH;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class TkHController extends AbstractController
{
//    private $request;
    private $manager;

    public function __construct(entityManagerInterface $manager)
    {
        $this->manager = $manager;
//        $this->request = $request;
    }


    #[Route('/tkh', name: 'app_tk_h')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller! test serv',
            'path' => 'src/Controller/TkHController.php',
        ]);
    }

    #[Route('/settkh', name: 'set_tkh', methods: 'POST')]
    public function settkh( Request $request): JsonResponse
    {
        // dd($request);
       $data = json_decode($request->getContent(), true);
//        $email = $data['email'];
//        $password = $data['password'];

        $ztinmmtkh = new ZtinmmTkH();
        $ztinmmtkh->setKonkursNr('22222')
            ->setKonkursName('eeeeeee');
        $this->manager->persist($ztinmmtkh);
        $this->manager->flush();



//        $email_exist1 = $this->manager->getRepository(User::class)->findOneBy(['email' => $email]);


//        if ($email_exist1) {
//
//            return new JsonResponse
//            (
//                [
//                    'statys' => false,
//                    'message' => 'mail already exists'
//                ]
//            );
//        } else {
//            $user = new User();
//
//            $hashedPassword = $passwordHash->hashPassword(
//                $user,
//                $password
//            );
//
//            $user->setEmail($email)
//                ->setRoles(array('ROLE_ADMIN'))
//                ->setPassword($hashedPassword);
//
////            $this->manager->persist($user);
////            $this->manager->flush();
//            $manager->persist($user);
//            $manager->flush();
            return new JsonResponse
            (
                [
                    'statys'=>true,
                    'message'=>'user added'
                ]
            );



    }


}
