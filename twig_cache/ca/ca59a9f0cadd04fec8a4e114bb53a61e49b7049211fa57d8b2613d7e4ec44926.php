<?php

/* calc.html */
class __TwigTemplate_3217955147f8344b478e54b996a1e1d6a56f6304c1bea0cb8129a7dd649d4646 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html", "calc.html", 1);
        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "main.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_footer($context, array $blocks = array())
    {
        echo " przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<h2 class=\"content-head is-center\">Prosty kalkulator</h2>

<div class=\"pure-g\">
<div class=\"l-box-lrg pure-u-1 pure-u-med-2-5\">
\t<form class=\"pure-form pure-form-stacked\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["app_url"]) ? $context["app_url"] : null), "html", null, true);
        echo "/app/calc.php\" method=\"post\">
\t\t<fieldset>

\t\t\t<label for=\"x\">Pierwsza liczba</label>
\t\t\t<input id=\"x\" type=\"text\" placeholder=\"wartość x\" name=\"x\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["x"]) ? $context["x"] : null), "html", null, true);
        echo "\">

\t\t\t<label for=\"op\">Operacja</label>
\t\t\t\t\t<select id=\"op\" name=\"op\">";
        // line 20
        if (array_key_exists("operation_name", $context)) {
            // line 21
            echo "<option value=\"{\$operation}\">ponownie:";
            echo twig_escape_filter($this->env, (isset($context["operation_name"]) ? $context["operation_name"] : null), "html", null, true);
            echo "</option>
<option value=\"\" disabled=\"true\">---</option>";
        }
        // line 24
        echo "\t\t\t\t\t\t<option value=\"plus\">(+) dodaj</option>
\t\t\t\t\t\t<option value=\"minus\">(-) odejmij </option>
\t\t\t\t\t\t<option value=\"times\">(*) pomnóż</option>
\t\t\t\t\t\t<option value=\"div\">(/) podziel</option>
\t\t\t\t\t</select>
\t\t\t\t\t
\t\t\t<label for=\"y\">Druga liczba</label>
\t\t\t<input id=\"y\" type=\"text\" placeholder=\"wartość y\" name=\"y\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["y"]) ? $context["y"] : null), "html", null, true);
        echo "\">

\t\t\t<button type=\"submit\" class=\"pure-button\">Oblicz</button>
\t\t</fieldset>
\t</form>
</div>

<div class=\"l-box-lrg pure-u-1 pure-u-med-3-5\">";
        // line 41
        if (array_key_exists("messages", $context)) {
            // line 42
            if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null)) > 0)) {
                // line 43
                ob_start();
                // line 44
                echo "\t\t<h4>Wystąpiły błędy: </h4>
\t\t<ol class=\"err\">";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 47
                    echo "\t\t\t<li>";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 49
                echo "\t\t</ol>";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            }
        }
        // line 55
        if (array_key_exists("infos", $context)) {
            // line 56
            if ((twig_length_filter($this->env, (isset($context["infos"]) ? $context["infos"] : null)) > 0)) {
                // line 57
                ob_start();
                // line 58
                echo "\t\t<h4>Wystąpiły informacje: </h4>
\t\t<ol class=\"inf\">";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["infos"]) ? $context["infos"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 61
                    echo "\t\t\t<li>";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "\t\t</ol>";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            }
        }
        // line 68
        if (array_key_exists("result", $context)) {
            // line 69
            echo "\t<h4>Wynik</h4>
\t<p class=\"res\">";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : null), "html", null, true);
            echo "
\t</p>";
        }
        // line 74
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "calc.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 74,  142 => 71,  139 => 69,  137 => 68,  132 => 63,  124 => 61,  120 => 60,  117 => 58,  115 => 57,  113 => 56,  111 => 55,  106 => 49,  98 => 47,  94 => 46,  91 => 44,  89 => 43,  87 => 42,  85 => 41,  75 => 31,  66 => 24,  60 => 21,  58 => 20,  52 => 15,  45 => 11,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "main.html" %}*/
/* */
/* {% block footer %} przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* <h2 class="content-head is-center">Prosty kalkulator</h2>*/
/* */
/* <div class="pure-g">*/
/* <div class="l-box-lrg pure-u-1 pure-u-med-2-5">*/
/* 	<form class="pure-form pure-form-stacked" action="{{app_url}}/app/calc.php" method="post">*/
/* 		<fieldset>*/
/* */
/* 			<label for="x">Pierwsza liczba</label>*/
/* 			<input id="x" type="text" placeholder="wartość x" name="x" value="{{x}}">*/
/* */
/* 			<label for="op">Operacja</label>*/
/* 					<select id="op" name="op">*/
/* */
/* {% if operation_name is defined %}*/
/* <option value="{$operation}">ponownie: {{operation_name}}</option>*/
/* <option value="" disabled="true">---</option>*/
/* {% endif %}*/
/* 						<option value="plus">(+) dodaj</option>*/
/* 						<option value="minus">(-) odejmij </option>*/
/* 						<option value="times">(*) pomnóż</option>*/
/* 						<option value="div">(/) podziel</option>*/
/* 					</select>*/
/* 					*/
/* 			<label for="y">Druga liczba</label>*/
/* 			<input id="y" type="text" placeholder="wartość y" name="y" value="{{y}}">*/
/* */
/* 			<button type="submit" class="pure-button">Oblicz</button>*/
/* 		</fieldset>*/
/* 	</form>*/
/* </div>*/
/* */
/* <div class="l-box-lrg pure-u-1 pure-u-med-3-5">*/
/* */
/* {# wyświeltenie listy błędów, jeśli istnieją #}*/
/* {% if messages is defined %}*/
/* 	{% if messages|length > 0 %} */
/* 		{% spaceless %}*/
/* 		<h4>Wystąpiły błędy: </h4>*/
/* 		<ol class="err">*/
/* 		{% for msg in messages %}*/
/* 			<li>{{ msg }}</li>*/
/* 		{% endfor %}*/
/* 		</ol>*/
/* 		{% endspaceless %}*/
/* 	{% endif %}*/
/* {% endif %}*/
/* */
/* {# wyświeltenie listy informacji, jeśli istnieją #}*/
/* {% if infos is defined %}*/
/* 	{% if infos|length > 0 %} */
/* 		{% spaceless %}*/
/* 		<h4>Wystąpiły informacje: </h4>*/
/* 		<ol class="inf">*/
/* 		{% for msg in infos %}*/
/* 			<li>{{ msg }}</li>*/
/* 		{% endfor %}*/
/* 		</ol>*/
/* 		{% endspaceless %}*/
/* 	{% endif %}*/
/* {% endif %}*/
/* */
/* {% if result is defined %}*/
/* 	<h4>Wynik</h4>*/
/* 	<p class="res">*/
/* 	{{result}}*/
/* 	</p>*/
/* {% endif %}*/
/* */
/* </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
