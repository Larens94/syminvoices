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

/* invoices/index.html.twig */
class __TwigTemplate_e83c84fef62e6651638dd7d7ba616f50c312a8296e15f9b9bd2ccc4bc1225b49 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoices/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "invoices/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Syminvoice Invoices";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " 

";
        // line 7
        if ((isset($context["invoices"]) || array_key_exists("invoices", $context) ? $context["invoices"] : (function () { throw new RuntimeError('Variable "invoices" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "<table class=\"table table-striped\">
    <thead>
        <tr>
            <th>Invoice Title</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["invoices"]) || array_key_exists("invoices", $context) ? $context["invoices"] : (function () { throw new RuntimeError('Variable "invoices" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
                // line 17
                echo "        <tr>
            <td>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "title", [], "any", false, false, false, 18), "html", null, true);
                echo "</td>
            <td>
             <a href=\"/invoice/";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["invoice"], "id", [], "any", false, false, false, 20), "html", null, true);
                echo "\" class=\"btn btn-dark\">Show</a>
            </td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['invoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "      
    </tbody>
</table>
";
        } else {
            // line 28
            echo "    <p>No invoices to display</p>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "invoices/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 28,  110 => 24,  100 => 20,  95 => 18,  92 => 17,  88 => 16,  78 => 8,  76 => 7,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title%}Syminvoice Invoices{% endblock %}

{% block body%} 

{% if invoices %}
<table class=\"table table-striped\">
    <thead>
        <tr>
            <th>Invoice Title</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    {% for invoice in invoices %}
        <tr>
            <td>{{ invoice.title }}</td>
            <td>
             <a href=\"/invoice/{{invoice.id}}\" class=\"btn btn-dark\">Show</a>
            </td>
        </tr>
    {% endfor %}
      
    </tbody>
</table>
{% else %}
    <p>No invoices to display</p>
{% endif %}
{% endblock %}
", "invoices/index.html.twig", "C:\\xampp\\htdocs\\syminvoices\\templates\\invoices\\index.html.twig");
    }
}
