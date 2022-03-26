<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Extension\SandboxExtension;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* newsletter/templates/blocks/container/oneColumnLayoutWidget.hbs */
class __TwigTemplate_372d4d9e264f8c748783f0449b30361ec8c7192351f8d913e8992360df766224 extends \MailPoetVendor\Twig\Template
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
        echo "<div class=\"mailpoet_widget_icon\">
";
        // line 2
        echo \MailPoetVendor\twig_source($this->env, "newsletter/templates/svg/layout-icons/1-column.svg");
        echo "
</div>
<div class=\"mailpoet_widget_title\">";
        // line 4
        echo $this->extensions['MailPoet\Twig\I18n']->translate("1 column");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/container/oneColumnLayoutWidget.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/blocks/container/oneColumnLayoutWidget.hbs", "/home/u217622089/domains/deadsnake.ca/public_html/wp-content/plugins/mailpoet/views/newsletter/templates/blocks/container/oneColumnLayoutWidget.hbs");
    }
}
