<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // ajt_review_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ajt_review_index');
            }

            return array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::indexAction',  'page' => 1,  '_route' => 'ajt_review_index',);
        }

        // ajt_review_index_p
        if (0 === strpos($pathinfo, '/index') && preg_match('#^/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajt_review_index_p')), array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::indexAction',  'page' => 1,));
        }

        if (0 === strpos($pathinfo, '/topic/add')) {
            // ajt_review_topic
            if ($pathinfo === '/topic/add') {
                return array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::addTopicAction',  'page' => 1,  '_route' => 'ajt_review_topic',);
            }

            // ajt_review_topic_p
            if (preg_match('#^/topic/add(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajt_review_topic_p')), array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::addTopicAction',  'page' => 1,));
            }

        }

        // ajt_review_review
        if ($pathinfo === '/review/add') {
            return array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::addReviewAction',  '_route' => 'ajt_review_review',);
        }

        if (0 === strpos($pathinfo, '/positive/add')) {
            // ajt_review_positive
            if ($pathinfo === '/positive/add') {
                return array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::addPositiveAction',  'page' => 1,  '_route' => 'ajt_review_positive',);
            }

            // ajt_review_positive_p
            if (preg_match('#^/positive/add(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajt_review_positive_p')), array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::addPositiveAction',  'page' => 1,));
            }

        }

        if (0 === strpos($pathinfo, '/negative/add')) {
            // ajt_review_negative
            if ($pathinfo === '/negative/add') {
                return array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::addNegativeAction',  'page' => 1,  '_route' => 'ajt_review_negative',);
            }

            // ajt_review_negative_p
            if (preg_match('#^/negative/add(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajt_review_negative_p')), array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::addNegativeAction',  'page' => 1,));
            }

        }

        // ajt_review_createReview
        if ($pathinfo === '/review/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ajt_review_createReview;
            }

            return array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::createReviewAction',  '_route' => 'ajt_review_createReview',);
        }
        not_ajt_review_createReview:

        // ajt_review_createTopic
        if ($pathinfo === '/topic/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ajt_review_createTopic;
            }

            return array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::createTopicAction',  '_route' => 'ajt_review_createTopic',);
        }
        not_ajt_review_createTopic:

        // ajt_review_createPositive
        if ($pathinfo === '/positive/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ajt_review_createPositive;
            }

            return array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::createPositiveAction',  '_route' => 'ajt_review_createPositive',);
        }
        not_ajt_review_createPositive:

        // ajt_review_createNegative
        if ($pathinfo === '/negative/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_ajt_review_createNegative;
            }

            return array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::createNegativeAction',  '_route' => 'ajt_review_createNegative',);
        }
        not_ajt_review_createNegative:

        if (0 === strpos($pathinfo, '/review')) {
            // ajt_review_run
            if (0 === strpos($pathinfo, '/review/run') && preg_match('#^/review/run/(?P<page>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ajt_review_run;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajt_review_run')), array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::runAction',));
            }
            not_ajt_review_run:

            // ajt_review_deleteReview
            if (0 === strpos($pathinfo, '/review/delete') && preg_match('#^/review/delete/(?P<page>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajt_review_deleteReview')), array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::deleteReviewAction',));
            }

        }

        // ajt_review_deletePositive
        if (0 === strpos($pathinfo, '/positive/delete') && preg_match('#^/positive/delete/(?P<page>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajt_review_deletePositive')), array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::deletePositiveAction',));
        }

        // ajt_review_deleteNegative
        if (0 === strpos($pathinfo, '/negative/delete') && preg_match('#^/negative/delete/(?P<page>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajt_review_deleteNegative')), array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::deleteNegativeAction',));
        }

        // ajt_review_deleteTopic
        if (0 === strpos($pathinfo, '/topic/delete') && preg_match('#^/topic/delete/(?P<page>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajt_review_deleteTopic')), array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::deleteTopicAction',));
        }

        // ajt_review_import
        if ($pathinfo === '/review/import') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ajt_review_import;
            }

            return array (  '_controller' => 'AJT\\ReviewBundle\\Controller\\ReviewsController::importAction',  '_route' => 'ajt_review_import',);
        }
        not_ajt_review_import:

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
