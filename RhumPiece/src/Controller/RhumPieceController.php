<?php

namespace App\Controller;

use Stripe\Stripe;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RhumPieceController extends AbstractController
{
    /**
     * @Route("/", name="rhum_piece")
     */
    public function index(): Response
    {
        return $this->render('rhum_piece/index.html.twig');
    }

    /**
     * @Route("/success", name="success")
     */
    public function success()
    {
        return $this->render('rhum_piece/success.html.twig');
    }

    /**
     * @Route("/error", name="error")
     */
    public function error()
    {
        return $this->render('rhum_piece/error.html.twig');
    }


     /**
     * @Route("/create-checkout-session", name="checkout")
     */
    public function checkout()
    {
        \Stripe\Stripe::setApiKey('sk_test_51IxsjYDu24MqLceYGoAazorpv8frWgw8hvHgIgj3swOQM6lopm61uD6MKa2zOhQoNERzCKjGFienLGSzir71ZwlC00JHfmKxqx');

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
              'price_data' => [
                'currency' => 'eur',
                'product_data' => [
                  'name' => 'Rhum',
                ],
                'unit_amount' => 2000,
              ],
              'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('error', [], UrlGeneratorInterface::ABSOLUTE_URL),
          ]);
          
          return new JsonResponse([ 'id' => $session->id ]);
    }
}
