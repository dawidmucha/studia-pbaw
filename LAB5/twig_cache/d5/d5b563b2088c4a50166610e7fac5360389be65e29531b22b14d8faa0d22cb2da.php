<?php

/* main.html */
class __TwigTemplate_085970cf07e71242d9c00cc47c4bcee7f6061112ef47a27ed731cfd8629b2c60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"pl\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, ((array_key_exists("page_description", $context)) ? (_twig_default_filter((isset($context["page_description"]) ? $context["page_description"] : null), "Default description")) : ("Default description")), "html", null, true);
        echo "\">

\t\t<title>";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter((isset($context["page_title"]) ? $context["page_title"] : null), "Default Title")) : ("Default Title")), "html", null, true);
        echo "</title>

\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">
\t</head>

\t<body>
\t\t<div id=\"app_top\">
\t\t<div>
\t\t\t<a href=\"\">";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter((isset($context["page_title"]) ? $context["page_title"] : null), "Default title")) : ("Default title")), "html", null, true);
        echo "</a>
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#app_top\">Loan Calculator</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#app_content\">Go to form</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t\t</div>

\t\t<div>
\t\t\t<div>
\t\t\t\t<h1>";
        // line 31
        echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter((isset($context["page_title"]) ? $context["page_title"] : null), "Loan calculator")) : ("Loan calculator")), "html", null, true);
        echo "
\t\t\t\t</h1>

\t\t\t\t<p>";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("page_description", $context)) ? (_twig_default_filter((isset($context["page_description"]) ? $context["page_description"] : null), "Easy, simple, brutal")) : ("Easy, simple, brutal")), "html", null, true);
        echo "
\t\t\t\t</p>

\t\t\t\t<p>
\t\t\t\t\t<a href=\"#app_content\">Go to the form</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>

\t\t<div>
\t\t\t<div id=\"app_content\">";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "\t\t\t</div>

\t\t\t<div>
\t\t\t\t<p>";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 52
        echo "\t\t\t\t</p>
\t\t\t</div>
\t\t</div>

\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
\t</body>
</html>";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        echo " Default content";
    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        echo " Default footer";
    }

    public function getTemplateName()
    {
        return "main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 51,  99 => 46,  89 => 52,  87 => 51,  82 => 47,  80 => 46,  67 => 35,  61 => 31,  44 => 16,  33 => 8,  28 => 6,  21 => 1,);
    }
}
/* <!doctype html>*/
/* <html lang="pl">*/
/* 	<head>*/
/* 		<meta charset="utf-8">*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* 		<meta name="description" content="{{ page_description|default("Default description") }}">*/
/* */
/* 		<title>{{ page_title|default("Default Title") }}</title>*/
/* */
/* 		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">*/
/* 	</head>*/
/* */
/* 	<body>*/
/* 		<div id="app_top">*/
/* 		<div>*/
/* 			<a href="">{{ page_title|default("Default title") }}</a>*/
/* 			<ul>*/
/* 				<li>*/
/* 					<a href="#app_top">Loan Calculator</a>*/
/* 				</li>*/
/* 				<li>*/
/* 					<a href="#app_content">Go to form</a>*/
/* 				</li>*/
/* 			</ul>*/
/* 		</div>*/
/* 		</div>*/
/* */
/* 		<div>*/
/* 			<div>*/
/* 				<h1>*/
/* 					{{ page_title|default("Loan calculator") }}*/
/* 				</h1>*/
/* */
/* 				<p>*/
/* 					{{ page_description|default("Easy, simple, brutal") }}*/
/* 				</p>*/
/* */
/* 				<p>*/
/* 					<a href="#app_content">Go to the form</a>*/
/* 				</p>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div>*/
/* 			<div id="app_content">*/
/* 				{% block content %} Default content {% endblock %}*/
/* 			</div>*/
/* */
/* 			<div>*/
/* 				<p>*/
/* 					{% block footer %} Default footer {% endblock %}*/
/* 				</p>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>*/
/* 	</body>*/
/* </html>*/
