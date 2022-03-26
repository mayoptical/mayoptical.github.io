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

/* premium.html */
class __TwigTemplate_e3ac3b545d11005958ba3d9e9a16d73b01e50b5a314139e8285a1c98045e93c2 extends \MailPoetVendor\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'after_javascript' => [$this, 'block_after_javascript'],
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
        $this->parent = $this->loadTemplate("layout.html", "premium.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"mailpoet-premium-page\">
  <div class=\"mailpoet-premium-page-intro mailpoet-premium-page-section mailpoet-grid-two-columns\">
    <div>
      <div class=\"mailpoet-gap-large\"></div>
      <h1 class=\"mailpoet-h1\">
        ";
        // line 9
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("We take care of your email, <br> so your email can take care of you", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
      </h1>
      <p>
        ";
        // line 12
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Ready to take your email to the next level?", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        ";
        // line 13
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("You’ve built your email list with our free plugin — now grow your business with Premium and Sending features.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
      </p>
      <div class=\"mailpoet-premium-page-intro-link-wrap\">
        <a
          target=\"_blank\"
          href=\"";
        // line 18
        echo \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\Functions']->addReferralId((((("https://account.mailpoet.com/?s=" . ($context["subscriber_count"] ?? null)) . "&email=") . \MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["current_wp_user"] ?? null), "user_email", [], "any", false, false, false, 18)) . "&utm_source=plugin&utm_medium=premium&utm_campaign=purchase")), "html_attr");
        echo "\"
          class=\"mailpoet-button button-primary\"
        >
          ";
        // line 21
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Upgrade", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </a>
      </div>
      <div class=\"mailpoet-gap-large\"></div>
    </div>
    <img
      src=\"";
        // line 27
        echo $this->extensions['MailPoet\Twig\Assets']->generateCdnUrl("premium/1-we-take-care.svg");
        echo "\"
      alt=\"";
        // line 28
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Image bird feeder");
        echo "\"
    >
  </div>

  <hr>

  ";
        // line 34
        if ((($context["subscriber_count"] ?? null) < 1000)) {
            // line 35
            echo "  <div class=\"mailpoet-premium-page-section mailpoet-premium-page-section-narrow mailpoet-premium-page-text-center\">
    <h1 class=\"mailpoet-h0\">
      ";
            // line 37
            echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("MailPoet Premium is actually yours for free", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
            echo "
    </h1>
    <p class=\"mailpoet-premium-page-section-large\">
      ";
            // line 40
            echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Website owners with less than 1,000 subscribers, like you, get the Premium add-on and let MailPoet deliver your emails for free.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
            echo "
    </p>
    <a
      target=\"_blank\"
      href=\"";
            // line 44
            echo \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\Functions']->addReferralId((((("https://account.mailpoet.com/?s=" . ($context["subscriber_count"] ?? null)) . "&email=") . \MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["current_wp_user"] ?? null), "user_email", [], "any", false, false, false, 44)) . "&utm_source=plugin&utm_medium=premium&utm_campaign=purchase")), "html_attr");
            echo "\"
      class=\"mailpoet-button button-primary\"
    >
      ";
            // line 47
            echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Sign up for free", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
            echo "
    </a>
  </div>

  <hr>
  ";
        }
        // line 53
        echo "
  <div class=\"mailpoet-premium-page-does-this-sound-like-you mailpoet-premium-page-section mailpoet-grid-two-columns\">
    <img
      src=\"";
        // line 56
        echo $this->extensions['MailPoet\Twig\Assets']->generateCdnUrl("premium/2-does-this-sound-like-you.svg");
        echo "\"
      alt=\"";
        // line 57
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Image bird on a branch");
        echo "\"
    >

    <div>
      <h1 class=\"mailpoet-h0\">
        ";
        // line 62
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Does this sound like you?", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
      </h1>
      <div class=\"mailpoet-grid-two-columns\">
        <p>
          ";
        // line 66
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("“I spent hours tweaking my last newsletter and a subscriber told me it landed in their <b>spambox!</b> It’s frustrating and I don’t know what I’m doing wrong.”", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </p>
        <p>
          ";
        // line 69
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("“<b>I wish I knew</b> how many people were reading my emails and which links they were clicking…”", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </p>
        <p>
          ";
        // line 72
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("“Ugh… My web host <b>doesn’t support WordPress email.</b>“", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </p>
        <p>
          ";
        // line 75
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("“I have a lot of patience, but my <b>WooCommerce emails failing</b> to send during a busy sales period, like Black Friday, is starting to wear thin.”", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </p>
        <p>
          ";
        // line 78
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("“I need an email plugin for WordPress <b>that just works!</b>”", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </p>
      </div>
    </div>
  </div>

  <hr>

  <div class=\"mailpoet-premium-page-upgrade-to-premium mailpoet-premium-page-section\">
    <div class=\" mailpoet-premium-page-section-narrow mailpoet-premium-page-text-center\">
      <h1 class=\"mailpoet-h0\">
        ";
        // line 89
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Upgrade to<br>MailPoet Premium", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
      </h1>
      <p>
        ";
        // line 92
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Everything you need to create and send emails that look great and land in inboxes every time — guaranteed.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        ";
        // line 93
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Upgrade today and enjoy…", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
      </p>
    </div>
    <div class=\"mailpoet-grid-three-columns\">
      <div>
        <h2 class=\"mailpoet-h2\">
          ";
        // line 99
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Detailed Analytics at a Glance", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </h2>
        <p>
          ";
        // line 102
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Learn more about your subscribers and optimize your campaigns.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
          ";
        // line 103
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("See who opened your emails, which links they clicked, and then use the data to make your emails even better.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
          ";
        // line 104
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("And if you run a WooCommerce store, you’ll also see the revenue earned per email.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </p>
      </div>
      <div>
        <h2 class=\"mailpoet-h2\">
          ";
        // line 109
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Advanced Email Delivery", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </h2>
        <p>
          ";
        // line 112
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("We built the MailPoet Sending Service to meet the demands of WordPress.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
          ";
        // line 113
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("It sends 50,000 emails per hour, with unparalleled speed and performance, 99% uptime, and zero loss.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
          ";
        // line 114
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("We’re the only email provider for WordPress that maintains its own email delivery infrastructure.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </p>
      </div>
      <div>
        <h2 class=\"mailpoet-h2\">
          ";
        // line 119
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Email that scales with you", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </h2>
        <p>
          ";
        // line 122
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Whether you send 10 or 100,000 emails a day, your emails will always be delivered on time, every time.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
          ";
        // line 123
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Our advanced email infrastructure routinely handles small business newsletters through to huge mailing lists with tens of thousands of subscribers.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </p>
      </div>
      <div>
        <h2 class=\"mailpoet-h2\">
          ";
        // line 128
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Industry-Leading Deliverability", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </h2>
        <p>
          ";
        // line 131
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("We monitor the 30+ million emails that pass through our servers each month, ensuring they always reach inboxes.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
          ";
        // line 132
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("It’s how we maintain our 98.5% deliverability rate, often exceeding industry standards.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </p>
      </div>
      <div>
        <h2 class=\"mailpoet-h2\">
          ";
        // line 137
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Email Marketing for WooCommerce", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </h2>
        <p>
          ";
        // line 140
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Let MailPoet fuel your WooCommerce marketing and increase your sales.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
          ";
        // line 141
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Add products from your store directly to emails and send personalized recommendations to customers based on their purchasing habits.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </p>
      </div>
      <div>
        <h2 class=\"mailpoet-h2\">
          ";
        // line 146
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Fast Priority Support", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </h2>
        <p>
          ";
        // line 149
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Enjoy fast, reliable support via email.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
          ";
        // line 150
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("No interns here — just real email experts applying 30 years of combined experience to help you send better emails for WordPress.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
          ";
        // line 151
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("We’re real humans and here to help!", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </p>
      </div>
    </div>
  </div>

  <hr>

  <div class=\"mailpoet-premium-page-get-started mailpoet-premium-page-section mailpoet-premium-page-text-center\">
    <h1 class=\"mailpoet-h0\">
      ";
        // line 161
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Get Started Now", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
    </h1>
    <p>
      ";
        // line 164
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Choose the MailPoet Premium option that’s right for you.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
    </p>
    <div class=\"mailpoet-premium-page-options mailpoet-grid-two-columns\">
      <div>
        <div class=\"mailpoet-premium-page-options-label\">
          ";
        // line 169
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Most Flexible", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </div>
        <h1 class=\"mailpoet-h0\">
          ";
        // line 172
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Premium", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </h1>
        <p class=\"mailpoet-premium-page-text-large\">
          ";
        // line 175
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("\$149/year", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </p>
        <div class=\"mailpoet-premium-page-options-divider\"></div>
        <ul>
          <li>";
        // line 179
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Unlimited subscribers", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "</li>
          <li>";
        // line 180
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Send emails via your web host or third party service", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "</li>
          <li>";
        // line 181
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Faster support", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "</li>
          <li>";
        // line 182
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Detailed analytics", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "</li>
          <li>";
        // line 183
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("WooCommerce emails", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "</li>
        </ul>
        <a
          target=\"_blank\"
          href=\"";
        // line 187
        echo \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\Functions']->addReferralId((((("https://account.mailpoet.com/?s=" . ($context["subscriber_count"] ?? null)) . "&email=") . \MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["current_wp_user"] ?? null), "user_email", [], "any", false, false, false, 187)) . "&utm_source=plugin&utm_medium=premium&utm_campaign=purchase")), "html_attr");
        echo "\"
          class=\"mailpoet-button button-primary\"
        >
          ";
        // line 190
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Get started", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </a>
      </div>
      <div>
        <div class=\"mailpoet-premium-page-options-label\">
          ";
        // line 195
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Most Reliable", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </div>
        <h1 class=\"mailpoet-h0\">
          ";
        // line 198
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Premium + Sending", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </h1>
        <p class=\"mailpoet-premium-page-text-large\">
          ";
        // line 201
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("From \$12/month", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </p>
        <ul>
          <li>";
        // line 204
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Email that scales with you", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "</li>
          <li>";
        // line 205
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Pay by number of subscribers", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "</li>
          <li>";
        // line 206
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Send emails via the MailPoet Sending Service", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "</li>
          <li>";
        // line 207
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Faster support", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "</li>
          <li>";
        // line 208
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Detailed analytics", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "</li>
          <li>";
        // line 209
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("WooCommerce emails", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "</li>
        </ul>
        <div class=\"mailpoet-premium-page-options-divider\"></div>
        <a
          target=\"_blank\"
          href=\"";
        // line 214
        echo \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\Functions']->addReferralId((((("https://account.mailpoet.com/?s=" . ($context["subscriber_count"] ?? null)) . "&email=") . \MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["current_wp_user"] ?? null), "user_email", [], "any", false, false, false, 214)) . "&utm_source=plugin&utm_medium=premium&utm_campaign=purchase")), "html_attr");
        echo "\"
          class=\"mailpoet-button button-primary\"
        >
          ";
        // line 217
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Get started", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        </a>
      </div>
    </div>
  </div>

  <hr>

  <div class=\"mailpoet-premium-page-our-agency-license mailpoet-premium-page-section mailpoet-grid-two-columns\">
    <div>
      <p class=\"mailpoet-premium-page-unlimited-websites\">
        ";
        // line 228
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Unlimited Websites", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
      </p>
      <h1 class=\"mailpoet-h0\">
        ";
        // line 231
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Our Agency License Fits With Your Business", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
      </h1>
      <p>
        ";
        // line 234
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("You’re busy creating and maintaining several WordPress websites for your clients.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        ";
        // line 235
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("You’re looking for a turnkey email solution that doesn’t require you to train your clients and that’s quick to configure because you want to keep things simple for yourself.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        ";
        // line 236
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Moreover, you need a solution that’s stable and secure.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        ";
        // line 237
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("This is where MailPoet fits perfectly.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
      </p>
      <ul class=\"mailpoet-premium-page-bullet-list\">
        <li>";
        // line 240
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Quickly deploy an easy to learn email solution for all your clients", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "</li>
        <li>";
        // line 241
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Easily manage all your customers from a single account", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "</li>
        <li>";
        // line 242
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Activate MailPoet Premium features on an unlimited number of websites", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "</li>
        <li>";
        // line 243
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Send unlimited emails for each site up to 1,000 subscribers", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "</li>
        <li>";
        // line 244
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Send to more than 1,000 subscribers with any other sending methods (your host, Sendgrid & Amazon SES)", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "</li>
        <li>";
        // line 245
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Exchange with our deliverability manager for any sending issues", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "</li>
      </ul>
      <a
        target=\"_blank\"
        href=\"https://www.mailpoet.com/premium/agency\"
        class=\"mailpoet-button button-primary\"
      >
        ";
        // line 252
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Buy Now", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
      </a>
    </div>
    <img
      src=\"";
        // line 256
        echo $this->extensions['MailPoet\Twig\Assets']->generateCdnUrl("premium/3-our-agency-license.svg");
        echo "\"
      alt=\"";
        // line 257
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Image woodpecker");
        echo "\"
    >
  </div>

  <hr>

  <div class=\"mailpoet-premium-page-satisfaction-guarantee mailpoet-premium-page-section mailpoet-premium-page-section-narrow mailpoet-premium-page-text-center\">
    <p class=\"mailpoet-premium-page-text-large\">
      ";
        // line 265
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Try MailPoet Premium for 30 days with our", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
    </p>
    <h1 class=\"mailpoet-h0\">
      ";
        // line 268
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("100% Satisfaction Guarantee", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
    </h1>
    <p>
      ";
        // line 271
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("We’re not happy unless you are.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
      ";
        // line 272
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("That’s why we offer a 30-day money-back guarantee.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
      ";
        // line 273
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("If you’re not 100% happy with MailPoet Premium during the 30 days after your purchase, we’ll happily refund the cost of your license.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
    </p>
    <p>
      ";
        // line 276
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Refunds are only available to Premium customers and doesn’t apply to plans using the MailPoet Sending Service.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
    </p>
  </div>

  <hr>

  <div class=\"mailpoet-premium-page-section mailpoet-premium-page-mailpoet-works mailpoet-premium-page-text-center\">
    <h1 class=\"mailpoet-h0\">
      ";
        // line 284
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("MailPoet works. Here’s the proof.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
    </h1>
    <div class=\"mailpoet-premium-page-section-narrow\">
      <p>
        ";
        // line 288
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("MailPoet is a trusted leader in email for WordPress since 2011. We’re also delighted to have a lot of raving fans! Every month, 5,000 new websites join our community. MailPoet is the stickiest email plugin for WordPress thanks to the reliability and simplicity at the core of our product improvements.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
      </p>
      <p>
        ";
        // line 291
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("We read our reviews in the WordPress.org plugin repository religiously. It’s a great source of motivation for our team. Your feedback – both positive and negative – helps us and guides us in choosing priorities for our product development.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
      </p>
    </div>
    <div class=\"mailpoet-gap\"></div>
    <div class=\"mailpoet-grid-three-columns\">
      <p>
        ";
        // line 297
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("“I cannot imagine an easier way to create, edit and manage newsletters. Thanks!”", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        <b> –  Chrilles</b>
      </p>
      <p>
        ";
        // line 301
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("“With MailPoet, we save ten hours of work with the creation of newsletters. Every week.”", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        <b> – highfood</b>
      </p>
      <p>
        ";
        // line 305
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("“Today I sent a question to the support service. I got the solution 15 minutes later. This is what I call a ‘professional service.’ Thanks!”", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        <b> – loogaroo</b>
      </p>
      <p>
        ";
        // line 309
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("“I’ve been a customer for a few years I have received the best support every single time. Thank you guys, you are great.”", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        <b> – disneyfamilytees</b>
      </p>
      <p>
        ";
        // line 313
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("“I had a little problem and Jack wrote me back to help very soon. His way to interact is very kind and professional… Very good customer support in case you have a problem. The plugin works very well and it has a lot of fantastic new features. I’m satisfied!”", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        <b> – anselmo</b>
      </p>
      <p>
        ";
        // line 317
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("“Hard to fault MailPoet plugin and the support team behind it. Very happy with the speed and quality of help and the regular upgrades.”", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
        <b> – tpoulos</b>
      </p>
    </div>
    <a
      target=\"_blank\"
      href=\"https://wordpress.org/support/plugin/mailpoet/reviews/\"
      class=\"mailpoet-button button-primary\"
    >
      ";
        // line 326
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Read all the reviews", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
    </a>
  </div>

  <hr>

  <div class=\"mailpoet-premium-page-your-alternative mailpoet-premium-page-section mailpoet-grid-two-columns\">
    <img
      src=\"";
        // line 334
        echo $this->extensions['MailPoet\Twig\Assets']->generateCdnUrl("premium/4-your-alternative.svg");
        echo "\"
      alt=\"";
        // line 335
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Image bird flies from a cage");
        echo "\"
    >
    <div>
      <h1 class=\"mailpoet-h0\">
        ";
        // line 339
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Your alternative: keep using the free plugin", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
      </h1>
      <p>
        ";
        // line 342
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Don’t get us wrong, we WANT you to use our free plugin (we created it, after all!). But imagine being able to grow your email list past 1,000 subscribers and:", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
      </p>
      <ul class=\"mailpoet-premium-page-bullet-list\">
        <li>";
        // line 345
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Never having to wait very long for support.");
        echo "</li>
        <li>";
        // line 346
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Having access to detailed analytics that help you understand your subscribers.");
        echo "</li>
        <li>";
        // line 347
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Boosting your WooCommerce sales with smart and integrated email marketing.");
        echo "</li>
        <li>";
        // line 348
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Not having MailPoet branding in the footer of your emails.");
        echo "</li>
      </ul>
    </div>
  </div>

  <hr>

  <div class=\"mailpoet-premium-page-section mailpoet-premium-page-section-narrow mailpoet-premium-page-text-center\">
    <h1 class=\"mailpoet-h0\">
      ";
        // line 357
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Get Started Now", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
    </h1>
    <p class=\"mailpoet-premium-page-text-large\">
      ";
        // line 360
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("You have nothing to lose and everything to gain. Upgrade now to grow your business and achieve your email marketing goals.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
    </p>
    <a
      target=\"_blank\"
      href=\"";
        // line 364
        echo \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\Functions']->addReferralId((((("https://account.mailpoet.com/?s=" . ($context["subscriber_count"] ?? null)) . "&email=") . \MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["current_wp_user"] ?? null), "user_email", [], "any", false, false, false, 364)) . "&utm_source=plugin&utm_medium=premium&utm_campaign=purchase")), "html_attr");
        echo "\"
      class=\"mailpoet-button button-primary\"
    >
      ";
        // line 367
        echo $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Upgrade now", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium");
        echo "
    </a>
    <p>
      ";
        // line 370
        echo MailPoet\Util\Helpers::replaceLinkTags($this->extensions['MailPoet\Twig\I18n']->translateWithContext("Already a Premium customer? Login to your [link]MailPoet account[/link] and add your license key in the Settings page.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium"), "https://account.mailpoet.com/login", ["target" => "_blank"]);
        // line 374
        echo "
    </p>
    <p>
      ";
        // line 377
        echo MailPoet\Util\Helpers::replaceLinkTags($this->extensions['MailPoet\Twig\I18n']->translateWithContext("Don’t need to use the MailPoet Sending Service? Not a problem! You can buy [link]Premium features separately.[/link] Prices start at \$149 per year for 1 website, \$249 for 4 sites, and \$499 for an unlimited number of sites.", "This text resides in the Premium page: /wp-admin/admin.php?page=mailpoet-premium"), "https://www.mailpoet.com/pricing-premium/", ["target" => "_blank"]);
        // line 381
        echo "
    </p>
  </div>
</div>

<div class=\"mailpoet-premium-page-footer-image\">
  <img
    src=\"";
        // line 388
        echo $this->extensions['MailPoet\Twig\Assets']->generateCdnUrl("premium/5-footer.png");
        echo "\"
    alt=\"";
        // line 389
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Image rooster crowing");
        echo "\"
  >
</div>
";
    }

    // line 394
    public function block_after_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 395
        echo "<script type=\"text/javascript\">
  MailPoet.trackEvent('Premium page viewed', {
    'MailPoet Free version': window.mailpoet_version
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "premium.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  785 => 395,  781 => 394,  773 => 389,  769 => 388,  760 => 381,  758 => 377,  753 => 374,  751 => 370,  745 => 367,  739 => 364,  732 => 360,  726 => 357,  714 => 348,  710 => 347,  706 => 346,  702 => 345,  696 => 342,  690 => 339,  683 => 335,  679 => 334,  668 => 326,  656 => 317,  649 => 313,  642 => 309,  635 => 305,  628 => 301,  621 => 297,  612 => 291,  606 => 288,  599 => 284,  588 => 276,  582 => 273,  578 => 272,  574 => 271,  568 => 268,  562 => 265,  551 => 257,  547 => 256,  540 => 252,  530 => 245,  526 => 244,  522 => 243,  518 => 242,  514 => 241,  510 => 240,  504 => 237,  500 => 236,  496 => 235,  492 => 234,  486 => 231,  480 => 228,  466 => 217,  460 => 214,  452 => 209,  448 => 208,  444 => 207,  440 => 206,  436 => 205,  432 => 204,  426 => 201,  420 => 198,  414 => 195,  406 => 190,  400 => 187,  393 => 183,  389 => 182,  385 => 181,  381 => 180,  377 => 179,  370 => 175,  364 => 172,  358 => 169,  350 => 164,  344 => 161,  331 => 151,  327 => 150,  323 => 149,  317 => 146,  309 => 141,  305 => 140,  299 => 137,  291 => 132,  287 => 131,  281 => 128,  273 => 123,  269 => 122,  263 => 119,  255 => 114,  251 => 113,  247 => 112,  241 => 109,  233 => 104,  229 => 103,  225 => 102,  219 => 99,  210 => 93,  206 => 92,  200 => 89,  186 => 78,  180 => 75,  174 => 72,  168 => 69,  162 => 66,  155 => 62,  147 => 57,  143 => 56,  138 => 53,  129 => 47,  123 => 44,  116 => 40,  110 => 37,  106 => 35,  104 => 34,  95 => 28,  91 => 27,  82 => 21,  76 => 18,  68 => 13,  64 => 12,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "premium.html", "/home/u217622089/domains/deadsnake.ca/public_html/wp-content/plugins/mailpoet/views/premium.html");
    }
}
