<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\FlashMessages;

class BaseController extends Controller
{
    use FlashMessages;

    protected $data = null;

    /**
     * @param $title
     * @param $sub_title
     */
    protected function setPageTitle($title, $sub_title)
    {
        view()->share(['pageTitle' => $title, 'subTitle' => $sub_title]);
    }

    /**
     * @param int $error_code
     * @param null $message
     *
     * @return \Illuminate\Http\Response
     */
    protected function showErrorPage($error_code = 404, $message = null)
    {
        $data['message'] = $message;
        return response()->view('errors.' . $error_code, $data, $error_code);
    }

    /**
     * @param bool $error
     * @param int $response_code
     * @param array $message
     * @param null $data
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function responseJson($error = true, $response_code = 200, $message = [], $data = null)
    {
        return response()->json([
            'error'         => $error,
            'response_code' => $response_code,
            'message'       => $message,
            'data'          => $data
        ]);
    }

    /**
     * @param string $route
     * @param string $message
     * @param string $type
     * @param bool $error
     * @param bool $with_old_input_when_error
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function responseRedirect($route, $message, $type = 'info', $error = false, $with_old_input_when_error = false)
    {
        $this->setFlashMessage($message, $type);
        $this->showFlashMessages();

        if ($error && $with_old_input_when_error)
        {
            return redirect()->back()->withInput();
        }

        return redirect()->route($route);
    }

    /**
     * @param string $message
     * @param string $type
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function responseRedirectBack($message, $type = 'info')
    {
        $this->setFlashMessage($message, $type);
        $this->showFlashMessages();

        return redirect()->back();
    }
}
