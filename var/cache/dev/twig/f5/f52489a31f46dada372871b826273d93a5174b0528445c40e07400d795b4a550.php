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
class __TwigTemplate_2da578280022a1f6dc3e22e238df6c9b9b0f60e469e581ee12d7769ed204fa60 extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
            echo "<table id=\"invoices\" class=\"table table-striped\">
    <thead>
        <tr>
            <th>Invoice Title</th>
            <th>Date</th>
            <th>Number</th>
            <th>Customer</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["invoices"]) || array_key_exists("invoices", $context) ? $context["invoices"] : (function () { throw new RuntimeError('Variable "invoices" does not exist.', 19, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 20
                echo "        <tr>
            <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "title", [], "any", false, false, false, 21), "html", null, true);
                echo "</td>
            <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "date", [], "any", false, false, false, 22), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
            <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "number", [], "any", false, false, false, 23), "html", null, true);
                echo "</td>
            <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "customer_id", [], "any", false, false, false, 24), "html", null, true);
                echo "</td>
            <td>
                <a href=\"/invoice/";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 26), "html", null, true);
                echo "\" class=\"btn btn-dark\">Show</a>
                <a href=\"/invoice/edit/header/";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 27), "html", null, true);
                echo "\" class=\"btn btn-light\">Edit Header</a>
                <a href=\"/invoice/edit/body/";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 28), "html", null, true);
                echo "\" class=\"btn btn-light\">Edit Body</a>
                <a href=\"#\" class=\"btn btn-danger delete-invoice\" data-id=\"";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 29), "html", null, true);
                echo "\">Delete</a>
            </td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "      
    </tbody>
</table>
";
        } else {
            // line 37
            echo "    <p>No invoices to display</p>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "    <script src=\"/js/main.js\"></script>
";
        
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
        return array (  160 => 42,  153 => 41,  144 => 37,  138 => 33,  128 => 29,  124 => 28,  120 => 27,  116 => 26,  111 => 24,  107 => 23,  103 => 22,  99 => 21,  96 => 20,  92 => 19,  79 => 8,  77 => 7,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title%}Syminvoice Invoices{% endblock %}

{% block body%} 

{% if invoices %}
<table id=\"invoices\" class=\"table table-striped\">
    <thead>
        <tr>
            <th>Invoice Title</th>
            <th>Date</th>
            <th>Number</th>
            <th>Customer</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    {% for r in invoices %}
        <tr>
            <td>{{ r.title }}</td>
            <td>{{ r.date|date('Y-m-d H:i:s') }}</td>
            <td>{{ r.number }}</td>
            <td>{{ r.customer_id }}</td>
            <td>
                <a href=\"/invoice/{{r.id}}\" class=\"btn btn-dark\">Show</a>
                <a href=\"/invoice/edit/header/{{r.id}}\" class=\"btn btn-light\">Edit Header</a>
                <a href=\"/invoice/edit/body/{{r.id}}\" class=\"btn btn-light\">Edit Body</a>
                <a href=\"#\" class=\"btn btn-danger delete-invoice\" data-id=\"{{ r.id }}\">Delete</a>
            </td>
        </tr>
    {% endfor %}
      
    </tbody>
</table>
{% else %}
    <p>No invoices to display</p>
{% endif %}
{% endblock %}

{% block javascripts %}
    <script src=\"/js/main.js\"></script>
{% endblock %}", "invoices/index.html.twig", "C:\\xampp\\htdocs\\syminvoices\\templates\\invoices\\index.html.twig");
    }
}
