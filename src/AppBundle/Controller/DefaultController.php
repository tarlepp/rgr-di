<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\TranslatorInterface;

class DefaultController extends Controller
{
    private $translator;

    /**
     * DefaultController constructor.
     *
     * @param Translator $translator
     */
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return new JsonResponse($this->translator->getLocale());
    }
}
