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

/* newsletter/templates/blocks/header/block.hbs */
class __TwigTemplate_c8b2aa07f8088f2b496a4bfd7abc6cbcbbae77ae5d649f5f911f6c3dc761db2a extends \MailPoetVendor\Twig\Template
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
<style type=\"text/css\">
    .mailpoet_editor_view_{{ viewCid }} .mailpoet_content,
    .mailpoet_editor_view_{{ viewCid }} .mailpoet_content p {
        color: {{ model.styles.text.fontColor }};
        font-family: {{fontWithFallback model.styles.text.fontFamily }};
        font-size: {{ model.styles.text.fontSize }};
        background-color: {{ model.styles.block.backgroundColor }};
        text-align: {{ model.styles.text.textAlign }};
    }
    .mailpoet_editor_view_{{ viewCid }} .mailpoet_content a,
    .mailpoet_editor_view_{{ viewCid }} .mailpoet_content a:hover,
    .mailpoet_editor_view_{{ viewCid }} .mailpoet_content a:active,
    .mailpoet_editor_view_{{ viewCid }} .mailpoet_content a:visited {
        color: {{ model.styles.link.fontColor }};
        text-decoration: {{ model.styles.link.textDecoration }};
    }
</style>
<div class=\"mailpoet_content mailpoet_text_content\" data-automation-id=\"header\">{{{ model.text }}}</div>
<div class=\"mailpoet_block_highlight\"></div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/header/block.hbs";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/blocks/header/block.hbs", "/home/u217622089/domains/deadsnake.ca/public_html/wp-content/plugins/mailpoet/views/newsletter/templates/blocks/header/block.hbs");
    }
}
