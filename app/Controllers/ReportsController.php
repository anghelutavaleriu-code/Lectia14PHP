<?php
namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use App\Controllers\Controller;
use App\Models\Route as Report;

class ReportsController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $reports = Report::orderBy('created_at', 'desc')->get();
        $html = $this->view('reports/index.view.php', ['reports' => $reports]);
        $response->getBody()->write($html);
        return $response;
    }

    public function create(Request $request, Response $response)
    {
        $categories = [
            'Hardware',
            'Software',
            'Network',
            'Security',
            'Other',
        ];

        $html = $this->view('reports/create.view.php', ['categories' => $categories]);
        $response->getBody()->write($html);
        return $response;
    }

    public function store(Request $request, Response $response)
    {
        $data = $request->getParsedBody();

        $report = new Report();
        $report->title = $data['title'] ?? '';
        $report->author = $data['author'] ?? '';
        $report->category = $data['category'] ?? '';
        $report->content = $data['content'] ?? '';
        $report->save();

        return $response->withHeader('Location', '/reports')->withStatus(302);
    }
}
