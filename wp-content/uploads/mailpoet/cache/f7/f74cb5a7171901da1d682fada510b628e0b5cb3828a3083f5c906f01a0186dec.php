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

/* newsletter/templates/blocks/divider/block.hbs */
class __TwigTemplate_1acaff9f43e4cacb25f08821eac1ecf3a4ff0b9a2890102868885de6c1b967c2 extends \MailPoetVendor\Twig\Template
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
        echo "<div class=\"mailpoet_tools\"></div>
<div class=\"mailpoet_content\" data-automation-id=\"divider\" style=\"padding: {{ model.styles.block.padding }} 0; background-color: {{ model.styles.block.backgroundColor }};\">
    <div class=\"mailpoet_divider\" style=\"border-top-width: {{ model.styles.block.borderWidth }}; border-top-style: {{ model.styles.block.borderStyle }}; border-top-color: {{ model.styles.block.borderColor }};\"></div>
    <div class=\"mailpoet_resize_handle_container\">
        <div class=\"mailpoet_resize_handle\" data-automation-id=\"divider_resize_handle\">
            <span class=\"mailpoet_resize_handle_text\">{{ totalHeight }}</span>
            <span class=\"mailpoet_resize_handle_icon\">";
        // line 7
        echo \MailPoetVendor\twig_source($this->env, "newsletter/templates/svg/block-icons/spacer.svg");
        echo "</span>
        </div>
    </div>
</div>
<div class=\"mailpoet_block_highlight\"></div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/divider/block.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/blocks/divider/block.hbs", "/home/u217622089/domains/deadsnake.ca/public_html/wp-content/plugins/mailpoet/views/newsletter/templates/blocks/divider/block.hbs");
    }
}
