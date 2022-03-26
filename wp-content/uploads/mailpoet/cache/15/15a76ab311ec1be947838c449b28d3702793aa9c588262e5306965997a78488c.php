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

/* newsletter/templates/components/styles.hbs */
class __TwigTemplate_781eb8ec6509f0e52bea7882c6f7ca3f731b583a6e390c0e83d2940881a48697 extends \MailPoetVendor\Twig\Template
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
        echo "<style type=\"text/css\">
    .mailpoet_text_block .mailpoet_content,
    .mailpoet_text_block .mailpoet_content p {
        color: {{ text.fontColor }};
        font-size: {{ text.fontSize }};
        font-family: {{fontWithFallback text.fontFamily }};
        line-height: {{ text.lineHeight }};
    }
    .mailpoet_text_block .mailpoet_content h1 {
        color: {{ h1.fontColor }};
        font-size: {{ h1.fontSize }};
        font-family: {{fontWithFallback h1.fontFamily }};
        line-height: {{ h1.lineHeight }};
    }
    .mailpoet_text_block .mailpoet_content h2 {
        color: {{ h2.fontColor }};
        font-size: {{ h2.fontSize }};
        font-family: {{fontWithFallback h2.fontFamily }};
        line-height: {{ h2.lineHeight }};
    }
    .mailpoet_text_block .mailpoet_content h3 {
        color: {{ h3.fontColor }};
        font-size: {{ h3.fontSize }};
        font-family: {{fontWithFallback h3.fontFamily }};
        line-height: {{ h3.lineHeight }};
    }
    .mailpoet_content a {
        color: {{ link.fontColor }};
        text-decoration: {{ link.textDecoration }};
    }
    .mailpoet_container_block, .mailpoet_container {
        background-color: {{ wrapper.backgroundColor }};
    }
    #mailpoet_editor_main_wrapper {
        background-color: {{ body.backgroundColor }};
    }
    {{#if isWoocommerceTransactional}}
      .mailpoet_woocommerce_heading {
        padding: 30px 20px;
        background: {{ woocommerce.brandingColor }};
      }
      .mailpoet_woocommerce_heading h1 {
        line-height: 1.2em;
        font-family: {{fontWithFallback text.fontFamily }};
        font-size: 36px;
        color: {{ woocommerce.headingFontColor }};
        margin: 0;
      }
      .mailpoet_woocommerce_content {
        color: {{ text.fontColor }};
      }
      .mailpoet_woocommerce_content a {
        color: {{ link.fontColor }};
      }
      .mailpoet_woocommerce_content h1,
      .mailpoet_woocommerce_content h2,
      .mailpoet_woocommerce_content h3 {
        color: {{ woocommerce.brandingColor }};
      }
    {{/if}}
</style>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/components/styles.hbs";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/components/styles.hbs", "/home/u217622089/domains/deadsnake.ca/public_html/wp-content/plugins/mailpoet/views/newsletter/templates/components/styles.hbs");
    }
}
