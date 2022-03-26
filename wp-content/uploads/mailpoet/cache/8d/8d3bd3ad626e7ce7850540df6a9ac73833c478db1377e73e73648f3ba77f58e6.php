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

/* woocommerce_setup_translations.html */
class __TwigTemplate_f9f8d0d3f352ba1919f3f4114ba14a8414b34bbe897f4cdde356cc93e384c458 extends \MailPoetVendor\Twig\Template
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
        echo $this->extensions['MailPoet\Twig\I18n']->localize(["wooCommerceSetupTitle" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Get ready to use MailPoet for WooCommerce", "Title on the WooCommerce setup page"), "wooCommerceSetupInfo" => $this->extensions['MailPoet\Twig\I18n']->translate("MailPoet Premium comes with powerful features for WooCommerce. Please complete this one-step setup to be ready to start using them."), "wooCommerceSetupGDPRTag" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("GDPR", "WooCommerce setup GDPR tag"), "wooCommerceSetupImportInfo" => $this->extensions['MailPoet\Twig\I18n']->translate("MailPoet will import all your WooCommerce customers. Do you want to import your WooCommerce customers as subscribed? [link]Learn more[/link]."), "wooCommerceSetupImportGDPRInfo" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("To be compliant, your customers must have accepted to receive your emails.", "GDPR compliance information"), "wooCommerceSetupTrackingInfo" => $this->extensions['MailPoet\Twig\I18n']->translate("Do you want to enable cookie tracking on your website? MailPoet will use cookies to provide you with more precise statistics. [link]Learn more[/link]."), "wooCommerceSetupTrackingGDPRInfo" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("To be compliant, you should display a cookie tracking banner on your website.", "GDPR compliance information"), "wooCommerceSetupFinishButtonTextWizard" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Start using MailPoet", "Submit button caption in the WooCommerce step in the wizard"), "wooCommerceSetupFinishButtonTextStandalone" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Start using WooCommerce features", "Submit button caption on the standalone WooCommerce setup page"), "unknownError" => $this->extensions['MailPoet\Twig\I18n']->translate("Unknown error")]);
    }

    public function getTemplateName()
    {
        return "woocommerce_setup_translations.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "woocommerce_setup_translations.html", "/home/u217622089/domains/deadsnake.ca/public_html/wp-content/plugins/mailpoet/views/woocommerce_setup_translations.html");
    }
}
