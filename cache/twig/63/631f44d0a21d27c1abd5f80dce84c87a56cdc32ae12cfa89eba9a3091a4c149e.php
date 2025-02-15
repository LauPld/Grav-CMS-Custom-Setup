<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/base.html.twig */
class __TwigTemplate_519bc8a68f3f4c7dac158033975959c89ad9b7a51787726efa816d6f3debcf53 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("blocks/base.html.twig", "partials/base.html.twig", 5);
        // line 5
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 5, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'javascripts' => [$this, 'block_javascripts'],
                'assets' => [$this, 'block_assets'],
                'body_classes' => [$this, 'block_body_classes'],
                'header' => [$this, 'block_header'],
                'header_navigation' => [$this, 'block_header_navigation'],
                'hero' => [$this, 'block_hero'],
                'body' => [$this, 'block_body'],
                'messages' => [$this, 'block_messages'],
                'footer' => [$this, 'block_footer'],
                'mobile' => [$this, 'block_mobile'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["body_classes"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->bodyClassFunc($context, [0 => "header-fixed", 1 => "header-animated", 2 => "header-dark", 3 => "header-transparent", 4 => "sticky-footer"]);
        // line 3
        $context["grid_size"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "grid-size");
        // line 4
        $context["compress"] = (($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "production-mode")) ? (".min.css") : (".css"));
        // line 6
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", []), "getActive", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", []), "site", []), "default_lang", []))), "html", null, true);
        echo "\">

<head>
    ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "
    ";
        // line 38
        $this->displayBlock('assets', $context, $blocks);
        // line 42
        echo "</head>

<body id=\"top\" class=\"";
        // line 44
        $this->displayBlock('body_classes', $context, $blocks);
        echo "\">
    <div id=\"page-wrapper\">
        ";
        // line 46
        $this->displayBlock('header', $context, $blocks);
        // line 78
        echo "
        ";
        // line 79
        $this->displayBlock('hero', $context, $blocks);
        // line 80
        echo "
        <section id=\"start\">
            ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 92
        echo "        </section>

    </div>

    ";
        // line 96
        $this->displayBlock('footer', $context, $blocks);
        // line 99
        echo "
    ";
        // line 100
        $this->displayBlock('mobile', $context, $blocks);
        // line 112
        echo "
    ";
        // line 113
        $this->displayBlock('bottom', $context, $blocks);
        // line 116
        echo "
</body>

</html>";
        $this->deferred->resolve($this, $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'head');
    }

    // line 10
    public function block_head_deferred($context, array $blocks = [])
    {
        // line 11
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 12
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 16
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 16)->display($context);
        // line 17
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc("theme://images/favicon.png"), "html", null, true);
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "url", [0 => true, 1 => true], "method"), "html", null, true);
        echo "\" />
    ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 22
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 23
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre" . ($context["compress"] ?? null))], "method");
        // line 24
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.exp")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-exp" . ($context["compress"] ?? null))], "method");
        }
        // line 25
        echo "    ";
        if ($this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->themeVarFunc($context, "spectre.icons")) {
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/spectre-icons" . ($context["compress"] ?? null))], "method");
        }
        // line 26
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => ("theme://css-compiled/theme" . ($context["compress"] ?? null))], "method");
        // line 27
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/custom.css"], "method");
        // line 28
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://css/line-awesome.min.css"], "method");
        // line 29
        echo "    ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        // line 32
        echo "    ";
        if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "uri", []), "path", [])) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "/admin") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
            // line 33
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
            echo "    
    ";
        }
        // line 35
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://js/site.js", 1 => ["group" => "bottom"]], "method");
        // line 36
        echo "    ";
    }

    public function block_assets($context, array $blocks = [])
    {
        $this->deferred->defer($this, 'assets');
    }

    // line 38
    public function block_assets_deferred($context, array $blocks = [])
    {
        // line 39
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "
    ";
        // line 40
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "
    ";
        $this->deferred->resolve($this, $context, $blocks);
    }

    // line 44
    public function block_body_classes($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, ($context["body_classes"] ?? null), "html", null, true);
    }

    // line 46
    public function block_header($context, array $blocks = [])
    {
        // line 47
        echo "        <section id=\"header\" class=\"section\">
            <section class=\"container ";
        // line 48
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        ";
        // line 51
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 51)->display($context);
        // line 52
        echo "                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                            ";
        // line 56
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 59
        echo "                        </nav>

                        ";
        // line 61
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "login", []), "enabled", []) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", []), "username", []))) {
            // line 62
            echo "                        <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> ";
            $this->loadTemplate("partials/login-status.html.twig", "partials/base.html.twig", 62)->display($context);
            // line 63
            echo "</span>
                        ";
        }
        // line 65
        echo "
                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
        ";
    }

    // line 56
    public function block_header_navigation($context, array $blocks = [])
    {
        // line 57
        echo "                            ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 57)->display($context);
        // line 58
        echo "                            ";
    }

    // line 79
    public function block_hero($context, array $blocks = [])
    {
    }

    // line 82
    public function block_body($context, array $blocks = [])
    {
        // line 83
        echo "            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container grid-xl\">
                    ";
        // line 85
        $this->displayBlock('messages', $context, $blocks);
        // line 88
        echo "                    ";
        $this->displayBlock("content_surround", $context, $blocks);
        echo "
                </section>
            </section>
            ";
    }

    // line 85
    public function block_messages($context, array $blocks = [])
    {
        // line 86
        echo "                    ";
        $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = null;
        try {
            $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b =             $this->loadTemplate("partials/messages.html.twig", "partials/base.html.twig", 86);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) {
            $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b->display($context);
        }
        // line 87
        echo "                    ";
    }

    // line 96
    public function block_footer($context, array $blocks = [])
    {
        // line 97
        echo "    ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 97)->display($context);
        // line 98
        echo "    ";
    }

    // line 100
    public function block_mobile($context, array $blocks = [])
    {
        // line 101
        echo "    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                ";
        // line 104
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 104)->display(twig_array_merge($context, ["mobile" => true]));
        // line 105
        echo "            </div>
            <nav class=\"overlay-menu\">
                ";
        // line 107
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 107)->display(twig_array_merge($context, ["tree" => true]));
        // line 108
        echo "            </nav>
        </div>
    </div>
    ";
    }

    // line 113
    public function block_bottom($context, array $blocks = [])
    {
        // line 114
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", [0 => "bottom"], "method");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 114,  383 => 113,  376 => 108,  374 => 107,  370 => 105,  368 => 104,  363 => 101,  360 => 100,  356 => 98,  353 => 97,  350 => 96,  346 => 87,  335 => 86,  332 => 85,  323 => 88,  321 => 85,  317 => 83,  314 => 82,  309 => 79,  305 => 58,  302 => 57,  299 => 56,  283 => 65,  279 => 63,  276 => 62,  274 => 61,  270 => 59,  268 => 56,  262 => 52,  260 => 51,  254 => 48,  251 => 47,  248 => 46,  242 => 44,  235 => 40,  230 => 39,  227 => 38,  218 => 36,  215 => 35,  209 => 33,  206 => 32,  203 => 31,  199 => 29,  196 => 28,  193 => 27,  190 => 26,  185 => 25,  180 => 24,  177 => 23,  174 => 22,  167 => 19,  163 => 18,  160 => 17,  158 => 16,  147 => 12,  144 => 11,  141 => 10,  128 => 116,  126 => 113,  123 => 112,  121 => 100,  118 => 99,  116 => 96,  110 => 92,  108 => 82,  104 => 80,  102 => 79,  99 => 78,  97 => 46,  92 => 44,  88 => 42,  86 => 38,  83 => 37,  81 => 31,  78 => 30,  76 => 22,  73 => 21,  71 => 10,  65 => 7,  62 => 6,  60 => 4,  58 => 3,  56 => 1,  25 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set body_classes = body_class(['header-fixed', 'header-animated', 'header-dark', 'header-transparent',
'sticky-footer']) %}
{% set grid_size = theme_var('grid-size') %}
{% set compress = theme_var('production-mode') ? '.min.css' : '.css' %}
{% use 'blocks/base.html.twig' %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\">

<head>
    {% block head deferred %}
    <meta charset=\"utf-8\" />
    <title>{% if page.title %}{{ page.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />
    {% endblock head %}

    {% block stylesheets %}
    {% do assets.addCss('theme://css-compiled/spectre'~compress) %}
    {% if theme_var('spectre.exp') %}{% do assets.addCss('theme://css-compiled/spectre-exp'~compress) %}{% endif %}
    {% if theme_var('spectre.icons') %}{% do assets.addCss('theme://css-compiled/spectre-icons'~compress) %}{% endif %}
    {% do assets.addCss('theme://css-compiled/theme'~compress) %}
    {% do assets.addCss('theme://css/custom.css') %}
    {% do assets.addCss('theme://css/line-awesome.min.css') %}
    {% endblock %}

    {% block javascripts %}
    {% if grav.uri.path starts with '/admin' %}
    {% do assets.addJs('jquery', 101) %}    
    {% endif %}
    {% do assets.addJs('theme://js/site.js', {group:'bottom'}) %}
    {% endblock %}

    {% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
    {% endblock %}
</head>

<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div id=\"page-wrapper\">
        {% block header %}
        <section id=\"header\" class=\"section\">
            <section class=\"container {{ grid_size }}\">
                <nav class=\"navbar\">
                    <section class=\"navbar-section logo\">
                        {% include 'partials/logo.html.twig' %}
                    </section>
                    <section class=\"navbar-section desktop-menu\">

                        <nav class=\"dropmenu animated\">
                            {% block header_navigation %}
                            {% include 'partials/navigation.html.twig' %}
                            {% endblock %}
                        </nav>

                        {% if config.plugins.login.enabled and grav.user.username %}
                        <span class=\"login-status-wrapper\"><i class=\"fa fa-user\"></i> {% include
                            'partials/login-status.html.twig' %}</span>
                        {% endif %}

                    </section>
                </nav>
            </section>
        </section>
        <div class=\"mobile-menu\">
            <div class=\"button_container\" id=\"toggle\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </div>
        </div>
        {% endblock %}

        {% block hero %}{% endblock %}

        <section id=\"start\">
            {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <section class=\"container grid-xl\">
                    {% block messages %}
                    {% include 'partials/messages.html.twig' ignore missing %}
                    {% endblock %}
                    {{ block('content_surround') }}
                </section>
            </section>
            {% endblock %}
        </section>

    </div>

    {% block footer %}
    {% include 'partials/footer.html.twig' %}
    {% endblock %}

    {% block mobile %}
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\">
            <div class=\"mobile-logo\">
                {% include 'partials/logo.html.twig' with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\">
                {% include 'partials/navigation.html.twig' with {tree: true} %}
            </nav>
        </div>
    </div>
    {% endblock %}

    {% block bottom %}
    {{ assets.js('bottom')|raw }}
    {% endblock %}

</body>

</html>", "partials/base.html.twig", "/var/www/grav3/user/themes/quarkchild/templates/partials/base.html.twig");
    }
    private $deferred;
}
