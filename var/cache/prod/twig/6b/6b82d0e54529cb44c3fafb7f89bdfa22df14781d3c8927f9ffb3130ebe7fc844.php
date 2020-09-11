<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* body.html.twig */
class __TwigTemplate_0939e6f52d1318102f91dedd09263850b6ee5b315ecea09036e0bcc7c6a170a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html>
    <body>
    <h1>Your lucky number is ";
        // line 3
        echo twig_escape_filter($this->env, ($context["number"] ?? null), "html", null, true);
        echo "</h1>

    <div>

    </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "body.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "body.html.twig", "/var/www/html/vrm-projekt/templates/body.html.twig");
    }
}
