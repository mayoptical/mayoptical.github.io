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

/* welcome_wizard.html */
class __TwigTemplate_9da9c96d94cc86dc27075ff13913b23c6728d571e1a65ded0ad8405ae3472cab extends \MailPoetVendor\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'translations' => [$this, 'block_translations'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "welcome_wizard.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<script>
  var mailpoet_logo_url = '";
        // line 5
        echo $this->extensions['MailPoet\Twig\Assets']->generateCdnUrl("welcome-wizard/mailpoet-logo.20200623.png");
        echo "';
  var wizard_sender_illustration_url = '";
        // line 6
        echo $this->extensions['MailPoet\Twig\Assets']->generateCdnUrl("welcome-wizard/sender.20200623.png");
        echo "';
  var wizard_email_course_illustration_url = '";
        // line 7
        echo $this->extensions['MailPoet\Twig\Assets']->generateCdnUrl("welcome-wizard/email-course.20200623.png");
        echo "';
  var wizard_tracking_illustration_url = '";
        // line 8
        echo $this->extensions['MailPoet\Twig\Assets']->generateCdnUrl("welcome-wizard/tracking.20200623.png");
        echo "';
  var wizard_woocommerce_illustration_url = '";
        // line 9
        echo $this->extensions['MailPoet\Twig\Assets']->generateCdnUrl("welcome-wizard/woocommerce.20200623.png");
        echo "';
  var wizard_MSS_pitch_illustration_url = '";
        // line 10
        echo $this->extensions['MailPoet\Twig\Assets']->generateCdnUrl("welcome-wizard/illu-pitch-mss.20190912.png");
        echo "';
  var is_mp2_migration_complete = ";
        // line 11
        echo json_encode(($context["is_mp2_migration_complete"] ?? null));
        echo ";
  var is_woocommerce_active = ";
        // line 12
        echo json_encode(($context["is_woocommerce_active"] ?? null));
        echo ";
  var finish_wizard_url = '";
        // line 13
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["finish_wizard_url"] ?? null), "html", null, true);
        echo "';
  var sender_data = ";
        // line 14
        echo json_encode(($context["sender"] ?? null));
        echo ";
  var admin_email = ";
        // line 15
        echo json_encode(($context["admin_email"] ?? null));
        echo ";
  var hide_mailpoet_beacon = true;
  var subscribers_count = ";
        // line 17
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["subscriber_count"] ?? null), "html", null, true);
        echo ";
  var mailpoet_account_url = '";
        // line 18
        echo $this->extensions['MailPoet\Twig\Functions']->addReferralId(((("https://account.mailpoet.com/?s=" . ($context["subscriber_count"] ?? null)) . "&email=") . \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["current_wp_user"] ?? null), "user_email", [], "any", false, false, false, 18), "js")));
        echo "';
  var has_mss_key_specified = ";
        // line 19
        echo json_encode(($context["has_mss_key_specified"] ?? null));
        echo ";
  var mailpoet_feature_flags = ";
        // line 20
        echo json_encode(($context["mailpoet_feature_flags"] ?? null));
        echo ";
</script>

<div id=\"mailpoet-wizard-container\"></div>

<div class=\"mailpoet-wizard-video\">
    <iframe width=\"1\" height=\"1\" src=\"https://player.vimeo.com/video/279123953\" frameborder=\"0\"></iframe>
</div>

";
    }

    // line 31
    public function block_translations($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo $this->extensions['MailPoet\Twig\I18n']->localize(["welcomeWizardLetsStartTitle" => $this->extensions['MailPoet\Twig\I18n']->translate("Welcome! Let’s get you started on the right foot."), "welcomeWizardSenderText" => $this->extensions['MailPoet\Twig\I18n']->translate("Who is the sender of the emails you’ll be creating with MailPoet?"), "welcomeWizardSenderMigratedUserText" => $this->extensions['MailPoet\Twig\I18n']->translate("We have a few things to tell you before you begin to ensure you have a good experience."), "welcomeWizardUsageTrackingStepTitle" => $this->extensions['MailPoet\Twig\I18n']->translate("Help MailPoet improve with anonymous usage tracking."), "welcomeWizardUsageTrackingStepSubTitle" => $this->extensions['MailPoet\Twig\I18n']->translate("Data we don’t gather:"), "welcomeWizardUsageTrackingStepTrackingLabel" => $this->extensions['MailPoet\Twig\I18n']->translate("Do you want to share anonymous data and help us improve the plugin? We appreciate your help!"), "welcomeWizardUsageTrackingStepTrackingLabelNote" => $this->extensions['MailPoet\Twig\I18n']->translate("This requires loading 3rd-party libraries enabled."), "welcomeWizardUsageTrackingStepTrackingLabelNoteNote" => $this->extensions['MailPoet\Twig\I18n']->translate("Note"), "welcomeWizardUsageTrackingStepLibs3rdPartyLabelNote" => $this->extensions['MailPoet\Twig\I18n']->translate("This needs to be enabled if you want to be able to contact support."), "welcomeWizardUsageTrackingStepLibs3rdPartyLabelNoteNote" => $this->extensions['MailPoet\Twig\I18n']->translate("Important"), "welcomeWizardUsageTrackingStepLibs3rdPartyLabel" => $this->extensions['MailPoet\Twig\I18n']->translate("Do you want to enable loading 3rd-party libraries, like Google Fonts (used in Form Editor) and HelpScout (used for support)?"), "welcomeWizardUsageTrackingStepLibs3rdPartyLink" => $this->extensions['MailPoet\Twig\I18n']->translate("Read more about libraries we use."), "welcomeWizardTrackingText" => $this->extensions['MailPoet\Twig\I18n']->translate("Gathering usage data allows us to make MailPoet better — the way you use MailPoet will be considered as we evaluate new features, judge the quality of an update, or determine if an improvement makes sense."), "welcomeWizardTrackingList1" => $this->extensions['MailPoet\Twig\I18n']->translate("Any personal data"), "welcomeWizardTrackingList2" => $this->extensions['MailPoet\Twig\I18n']->translate("Email addresses"), "welcomeWizardTrackingList3" => $this->extensions['MailPoet\Twig\I18n']->translate("Login and passwords"), "welcomeWizardTrackingList4" => $this->extensions['MailPoet\Twig\I18n']->translate("Content of your emails"), "welcomeWizardTrackingList5" => $this->extensions['MailPoet\Twig\I18n']->translate("Open and click rates"), "welcomeWizardTrackingLink" => $this->extensions['MailPoet\Twig\I18n']->translate("Read more about what we collect."), "welcomeWizardEmailCourseTitle" => $this->extensions['MailPoet\Twig\I18n']->translate("Sign up to our 4-part email course"), "welcomeWizardEmailCourseText" => $this->extensions['MailPoet\Twig\I18n']->translate("A must for every beginner (in English only)"), "seeVideoGuide" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("See video guide", "A label on a button"), "skip" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Skip", "A label on a skip button"), "finishLater" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Finish later", "A label on a skip button"), "senderAddress" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("From Address", "A form field label"), "replyToAddress" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Reply-to Address", "A form field label"), "senderName" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("From Name", "A form field label"), "next" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Next", "A label on a button"), "continue" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Continue", "A label on a button")]);
        // line 62
        echo "
";
        // line 63
        $this->loadTemplate("mss_pitch_translations.html", "welcome_wizard.html", 63)->display($context);
        // line 64
        $this->loadTemplate("woocommerce_setup_translations.html", "welcome_wizard.html", 64)->display($context);
    }

    public function getTemplateName()
    {
        return "welcome_wizard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 64,  134 => 63,  131 => 62,  129 => 32,  125 => 31,  111 => 20,  107 => 19,  103 => 18,  99 => 17,  94 => 15,  90 => 14,  86 => 13,  82 => 12,  78 => 11,  74 => 10,  70 => 9,  66 => 8,  62 => 7,  58 => 6,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "welcome_wizard.html", "/home/u217622089/domains/deadsnake.ca/public_html/wp-content/plugins/mailpoet/views/welcome_wizard.html");
    }
}
