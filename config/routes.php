<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));

    /**
     * Apply a middleware to the current route scope.
     * Requires middleware to be registered via `Application::routes()` with `registerMiddleware()`
     */
    $routes->applyMiddleware('csrf');

    $routes->connect('/', ['controller' => 'Home', 'action' => 'home']);
    $routes->connect('/shitsumon-input', ['controller' => 'Question', 'action' => 'create']);
    $routes->connect('/shitsumon-input/review', ['controller' => 'Question', 'action' => 'review']);
    $routes->connect('/register', ['controller' => 'Auth', 'action' => 'register']);
    $routes->connect('/register/review', ['controller' => 'Auth', 'action' => 'registerReview']);
    $routes->connect('/register/success', ['controller' => 'Auth', 'action' => 'registerSuccess']);
    $routes->connect('/register/verification', ['controller' => 'Auth', 'action' => 'registerVerification']);
    $routes->connect('/register/verification/review', ['controller' => 'Auth', 'action' => 'registerVerificationReview']);
    $routes->connect('/register/verification/success', ['controller' => 'Auth', 'action' => 'registerVerificationSuccess']);
    $routes->connect('/login', ['controller' => 'Auth', 'action' => 'login']);
    $routes->connect('/logout', ['controller' => 'Auth', 'action' => 'logout']);
    $routes->connect('/my-page', ['controller' => 'MyPage', 'action' => 'index']);
    $routes->connect('/my-page/profile/edit', ['controller' => 'MyPage', 'action' => 'edit_profile']);
    $routes->connect('/my-page/questions/answered', ['controller' => 'MyPage', 'action' => 'answeredQuestions']);
    $routes->connect('/my-page/questions/all', ['controller' => 'MyPage', 'action' => 'allQuestions']);
    $routes->connect('/my-page/mark-resolved/:answer_id', ['controller' => 'MyPage', 'action' => 'markResolved']);
    $routes->connect('/my-page/messages/:thread_id', ['controller' => 'MyPage', 'action' => 'threadDetail']);
    $routes->connect('/my-page/messages/:thread_id/review-message', ['controller' => 'MyPage', 'action' => 'reviewMessage']);
    $routes->connect('/qanda-uketsukechu', ['controller' => 'QuestionAnswer', 'action' => 'index']);
    $routes->connect('/tag/:id/:name', ['controller' => 'QuestionAnswer', 'action' => 'tag']);
    $routes->connect('/qanda-sumi', ['controller' => 'QuestionAnswer', 'action' => 'solved']);
    $routes->connect('/qanda-subete', ['controller' => 'QuestionAnswer', 'action' => 'all']);
    $routes->connect('/senmonka', ['controller' => 'Expert', 'action' => 'index']);
    $routes->connect('/seihin-service', ['controller' => 'ProductAndServices', 'action' => 'index']);
    $routes->connect('/oshigoto', ['controller' => 'Jobs', 'action' => 'index']);
    $routes->connect('/seminars-lessons', ['controller' => 'SeminarLessons', 'action' => 'index']);
    $routes->connect('/sub-categories', ['controller' => 'Question', 'action' => 'subCategories']);
    $routes->connect('/q/:hash', ['controller' => 'Question', 'action' => 'detail']);
    $routes->connect('/q/:hash/answer', ['controller' => 'Question', 'action' => 'addAnswer']);
    $routes->connect('/a/:id/like', ['controller' => 'Question', 'action' => 'likeAnswer']);
    $routes->connect('/q/:hash/like', ['controller' => 'Question', 'action' => 'like']);
    $routes->connect('/u/:nickname', ['controller' => 'PublicProfile', 'action' => 'index']);
    $routes->connect('/u/:nickname/send-message', ['controller' => 'PublicProfile', 'action' => 'sendMessage']);
    $routes->connect('/u/:nickname/review-message', ['controller' => 'PublicProfile', 'action' => 'reviewMessage']);
    $routes->fallbacks(DashedRoute::class);
});

/**
 * If you need a different set of middleware or none at all,
 * open new scope and define routes there.
 *
 * ```
 * Router::scope('/api', function (RouteBuilder $routes) {
 *     // No $routes->applyMiddleware() here.
 *     // Connect API actions here.
 * });
 * ```
 */
