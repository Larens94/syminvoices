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

/* invoices/show.html.twig */
class __TwigTemplate_43b385cd2d7431350989890615feb71694628166c104ef1d708d881545de900f extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoices/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "invoices/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Number invoice ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
        if ((isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "

<div class=\"container\">
    <div class=\"card\">
        <div class=\"card-header\">
            N.";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13), "html", null, true);
            echo "
            <strong>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 14, $this->source); })()), "date", [], "any", false, false, false, 14), "Y-m-d H:i:s"), "html", null, true);
            echo "</strong>
            <span class=\"float-right\"> <strong>Status:</strong> Pending</span>

        </div>
        <div class=\"card-body\">
            <div class=\"row mb-4\">
                <div class=\"col-sm-6\">
                    <h6 class=\"mb-3\">From:</h6>
                    <div>
                        <strong>Webz Poland</strong>
                    </div>
                    <div>Madalinskiego 8</div>
                    <div>71-101 Szczecin, Poland</div>
                    <div>Email: info@webz.com.pl</div>
                    <div>Phone: +48 444 666 3333</div>
                </div>

                <div class=\"col-sm-6\">
                    <h6 class=\"mb-3\">To:</h6>
                    <div>
                        <strong>Bob Mart</strong>
                    </div>
                    <div>Attn: Daniel Marek</div>
                    <div>43-190 Mikolow, Poland</div>
                    <div>Email: marek@daniel.com</div>
                    <div>Phone: +48 123 456 789</div>
                </div>
            </div>

            <div class=\"table-responsive-sm\">
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th class=\"center\">#</th>
                            <th>Description</th>
                            <th class=\"right\">Unit Cost</th>
                            <th class=\"center\">Qty</th>
                            <th class=\"right\">Total iva</th>
                        </tr>
                    </thead>
                    <tbody>
                            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["invoiceRows"]) || array_key_exists("invoiceRows", $context) ? $context["invoiceRows"] : (function () { throw new RuntimeError('Variable "invoiceRows" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 56
                echo "                                <tr>
                                    <td class=\"center\">1</td>
                                    <td class=\"left\">";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "description", [], "any", false, false, false, 58), "html", null, true);
                echo "</td>

                                    <td class=\"right\">";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "amount", [], "any", false, false, false, 60), "html", null, true);
                echo "</td>
                                    <td class=\"center\">";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "quantity", [], "any", false, false, false, 61), "html", null, true);
                echo "</td>
                                    <td class=\"right\">";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "amountIva", [], "any", false, false, false, 62), "html", null, true);
                echo "</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                    </tbody>
                </table>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-sm-5\">

                </div>

                <div class=\"col-lg-4 col-sm-5 ml-auto\">
                    <table class=\"table table-clear\">
                        <tbody>
                            <tr>
                                <td class=\"left\">
                                    <strong>VAT (22%)</strong>
                                </td>
                                <td class=\"right\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["totalRows"]) || array_key_exists("totalRows", $context) ? $context["totalRows"] : (function () { throw new RuntimeError('Variable "totalRows" does not exist.', 80, $this->source); })()), "TOTALE_ROWS_IVA", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td class=\"left\">
                                    <strong>Total</strong>
                                </td>
                                <td class=\"right\">
                                    <strong>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["totalRows"]) || array_key_exists("totalRows", $context) ? $context["totalRows"] : (function () { throw new RuntimeError('Variable "totalRows" does not exist.', 87, $this->source); })()), "TOTALE_ROWS_WITH_IVA", [], "any", false, false, false, 87), "html", null, true);
            echo "</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>


            </div>

        </div>
    </div>
</div>
<a href=\"/\">Go back</a>
";
        } else {
            // line 103
            echo "    <p>No invoices to display</p>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "invoices/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 103,  191 => 87,  181 => 80,  164 => 65,  155 => 62,  151 => 61,  147 => 60,  142 => 58,  138 => 56,  134 => 55,  90 => 14,  86 => 13,  79 => 8,  77 => 7,  67 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title%}Number invoice {{ invoice.id }}{% endblock %}

{% block body%} 

{% if invoice %}


<div class=\"container\">
    <div class=\"card\">
        <div class=\"card-header\">
            N.{{ invoice.id }}
            <strong>{{ invoice.date|date('Y-m-d H:i:s') }}</strong>
            <span class=\"float-right\"> <strong>Status:</strong> Pending</span>

        </div>
        <div class=\"card-body\">
            <div class=\"row mb-4\">
                <div class=\"col-sm-6\">
                    <h6 class=\"mb-3\">From:</h6>
                    <div>
                        <strong>Webz Poland</strong>
                    </div>
                    <div>Madalinskiego 8</div>
                    <div>71-101 Szczecin, Poland</div>
                    <div>Email: info@webz.com.pl</div>
                    <div>Phone: +48 444 666 3333</div>
                </div>

                <div class=\"col-sm-6\">
                    <h6 class=\"mb-3\">To:</h6>
                    <div>
                        <strong>Bob Mart</strong>
                    </div>
                    <div>Attn: Daniel Marek</div>
                    <div>43-190 Mikolow, Poland</div>
                    <div>Email: marek@daniel.com</div>
                    <div>Phone: +48 123 456 789</div>
                </div>
            </div>

            <div class=\"table-responsive-sm\">
                <table class=\"table table-striped\">
                    <thead>
                        <tr>
                            <th class=\"center\">#</th>
                            <th>Description</th>
                            <th class=\"right\">Unit Cost</th>
                            <th class=\"center\">Qty</th>
                            <th class=\"right\">Total iva</th>
                        </tr>
                    </thead>
                    <tbody>
                            {% for r in invoiceRows %}
                                <tr>
                                    <td class=\"center\">1</td>
                                    <td class=\"left\">{{ r.description }}</td>

                                    <td class=\"right\">{{ r.amount }}</td>
                                    <td class=\"center\">{{ r.quantity }}</td>
                                    <td class=\"right\">{{ r.amountIva }}</td>
                                </tr>
                            {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-4 col-sm-5\">

                </div>

                <div class=\"col-lg-4 col-sm-5 ml-auto\">
                    <table class=\"table table-clear\">
                        <tbody>
                            <tr>
                                <td class=\"left\">
                                    <strong>VAT (22%)</strong>
                                </td>
                                <td class=\"right\">{{ totalRows.TOTALE_ROWS_IVA }}</td>
                            </tr>
                            <tr>
                                <td class=\"left\">
                                    <strong>Total</strong>
                                </td>
                                <td class=\"right\">
                                    <strong>{{ totalRows.TOTALE_ROWS_WITH_IVA }}</strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>


            </div>

        </div>
    </div>
</div>
<a href=\"/\">Go back</a>
{% else %}
    <p>No invoices to display</p>
{% endif %}
{% endblock %}
", "invoices/show.html.twig", "C:\\xampp\\htdocs\\syminvoices\\templates\\invoices\\show.html.twig");
    }
}
