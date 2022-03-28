<?php

/* loan.html */
class __TwigTemplate_0cdb1316bacc8c720aab49e9adbb0bbb66458a8d0df363fddcab7f9a6f5ba9c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("main.html", "loan.html", 1);
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
        echo " stopka";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo " 

<div class='container d-flex flex-column align-items-center m-4'>
\t<!-- <div>
\t\t<a href=\"<?php print(_APP_ROOT); ?>/app/security/logout.php\">
\t\t\tLog out
\t\t</a>
\t</div> -->

\t<h1>Loan Calculator</h1>

\t<form class='d-flex flex-column align-items-strertch'>
\t\t<label class='pb-3'>
\t\t\tLoan amount: <br />
\t\t\t<input type=\"text\" id=\"amount\" name=\"amount\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["amount"]) ? $context["amount"] : null), "html", null, true);
        echo "\" />
\t\t</label> <br />
\t\t<label class='pb-3'>
\t\t\tNumber of installments <br />
\t\t\t<input type=\"text\" id=\"installments\" name=\"installments\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["installments"]) ? $context["installments"] : null), "html", null, true);
        echo "\" />
\t\t</label> <br />
\t\t<label class='pb-3'>
\t\t\tLoan rate: <br />
\t\t\t<div class='d-flex flex-row'>
\t\t\t\t<input type=\"text\" id=\"loanrate\" name=\"loanrate\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["loanrate"]) ? $context["loanrate"] : null), "html", null, true);
        echo "\" />
\t\t\t\t<div>%</div>
\t\t\t</div>
\t\t</label> <br />
\t\t<label class='pb-3'>
\t\t\tUpfront payment: <br />
\t\t\t<input type=\"text\" id=\"upfront\" name=\"upfront\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["upfront"]) ? $context["upfront"] : null), "html", null, true);
        echo "\" />
\t\t</label> <br />

\t\t<button type=\"submit\" value=\"Calculate\" class='btn btn-primary m-2 p-3'>
\t\t\tSubmit
\t\t</button>
\t</form>";
        // line 43
        if (array_key_exists("messages", $context)) {
            // line 44
            if ((twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null)) > 0)) {
                // line 45
                ob_start();
                // line 46
                echo "\t\t\t\t<h4>Errors:</h4>
\t\t\t\t<div class='alert alert-warning p-4'>
\t\t\t\t\t<ol>";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                    // line 50
                    echo "\t\t\t\t\t\t\t<li>";
                    echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "\t\t\t\t\t</ol>
\t\t\t\t</div>";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            }
        }
        // line 58
        if (array_key_exists("result", $context)) {
            // line 59
            echo "\t\t<h3 class='m-4'>
\t\t\tOne payment: 
\t\t\t<span class='badge bg-success'>";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["result"]) ? $context["result"] : null), "html", null, true);
            echo "
\t\t\t</span>
\t\t</h3>";
        }
        // line 66
        echo "\t

\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\"></script>
</div>";
    }

    public function getTemplateName()
    {
        return "loan.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 66,  120 => 62,  116 => 59,  114 => 58,  108 => 52,  100 => 50,  96 => 49,  92 => 46,  90 => 45,  88 => 44,  86 => 43,  77 => 34,  68 => 28,  60 => 23,  53 => 19,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "main.html" %}*/
/* */
/* {% block footer %} stopka {% endblock %}*/
/* */
/* {% block content %} */
/* */
/* <div class='container d-flex flex-column align-items-center m-4'>*/
/* 	<!-- <div>*/
/* 		<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php">*/
/* 			Log out*/
/* 		</a>*/
/* 	</div> -->*/
/* */
/* 	<h1>Loan Calculator</h1>*/
/* */
/* 	<form class='d-flex flex-column align-items-strertch'>*/
/* 		<label class='pb-3'>*/
/* 			Loan amount: <br />*/
/* 			<input type="text" id="amount" name="amount" value="{{amount}}" />*/
/* 		</label> <br />*/
/* 		<label class='pb-3'>*/
/* 			Number of installments <br />*/
/* 			<input type="text" id="installments" name="installments" value="{{installments}}" />*/
/* 		</label> <br />*/
/* 		<label class='pb-3'>*/
/* 			Loan rate: <br />*/
/* 			<div class='d-flex flex-row'>*/
/* 				<input type="text" id="loanrate" name="loanrate" value="{{loanrate}}" />*/
/* 				<div>%</div>*/
/* 			</div>*/
/* 		</label> <br />*/
/* 		<label class='pb-3'>*/
/* 			Upfront payment: <br />*/
/* 			<input type="text" id="upfront" name="upfront" value="{{upfront}}" />*/
/* 		</label> <br />*/
/* */
/* 		<button type="submit" value="Calculate" class='btn btn-primary m-2 p-3'>*/
/* 			Submit*/
/* 		</button>*/
/* 	</form>*/
/* */
/* */
/* 	{% if messages is defined %}*/
/* 		{% if messages|length > 0 %}*/
/* 			{% spaceless %}*/
/* 				<h4>Errors:</h4>*/
/* 				<div class='alert alert-warning p-4'>*/
/* 					<ol>*/
/* 						{% for msg in messages %}*/
/* 							<li>{{ msg }}</li>*/
/* 						{% endfor %}*/
/* 					</ol>*/
/* 				</div>*/
/* 			{% endspaceless %}*/
/* 		{% endif %}*/
/* 	{% endif %}*/
/* */
/* 	{% if result is defined %}*/
/* 		<h3 class='m-4'>*/
/* 			One payment: */
/* 			<span class='badge bg-success'>*/
/* 				{{ result }}*/
/* 			</span>*/
/* 		</h3>*/
/* 	{% endif %}*/
/* 	*/
/* */
/* 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>*/
/* </div>*/
/* */
/* {% endblock %}*/
