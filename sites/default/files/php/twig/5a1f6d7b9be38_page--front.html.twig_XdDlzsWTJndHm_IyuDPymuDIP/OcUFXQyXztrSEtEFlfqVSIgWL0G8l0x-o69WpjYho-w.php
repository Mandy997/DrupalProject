<?php

/* themes/property/templates/page--front.html.twig */
class __TwigTemplate_e11d4710a43e165652465c545db063e93d9515ee8d4d0adca9332a22987154a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<body class=\"c-layout-header-fixed c-layout-header-mobile-fixed\">
    <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
    <!-- BEGIN: HEADER -->
    <header class=\"c-layout-header c-layout-header-4 c-layout-header-default-mobile\" data-minimize-offset=\"80\">
        <div class=\"c-navbar\">
            <div class=\"container\">
                <!-- BEGIN: BRAND -->
                <div class=\"c-navbar-wrapper clearfix\">
                    <div class=\"c-brand c-pull-left\">
                        <div class=\"c-logo\">
                            ";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "logo", array()), "html", null, true));
        echo "
                        </div>

                        <!--<a href=\"index.html\" class=\"c-logo\">
                            <img src=\"";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
        echo "/themes/property/assets/base/img/layout/logos/logo-4.png\" alt=\"山东省知识产权公共服务平台\" class=\"c-desktop-logo\">
                            <img src=\"";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
        echo "/themes/property/assets/base/img/layout/logos/logo-1.png\" alt=\"山东省知识产权公共服务平台\" class=\"c-desktop-logo-inverse\">
                            <img src=\"";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
        echo "/themes/property/assets/base/img/layout/logos/logo-1.png\" alt=\"山东省知识产权公共服务平台\" class=\"c-mobile-logo\"> 
                            </a>-->
                        <button class=\"c-hor-nav-toggler\" type=\"button\" data-target=\".c-mega-menu\">
                            <span class=\"c-line\"></span>
                            <span class=\"c-line\"></span>
                            <span class=\"c-line\"></span>
                        </button>
                        <button class=\"c-topbar-toggler\" type=\"button\">
                            <i class=\"fa fa-ellipsis-v\"></i>
                        </button>
                    </div>
                    <!-- END: BRAND -->
                    <!-- BEGIN: MEGA MENU -->
                    <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                        ";
        // line 31
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", array()), "html", null, true));
        echo "
                    
                   
                </div>
            </div>
        </div>
    </header>
    <!-- END: HEADER -->
    <!-- BEGIN: PAGE CONTAINER -->
    <div class=\"c-layout-page\">
        <!-- BEGIN: PAGE CONTENT -->
        <!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
        ";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "banner", array()), "html", null, true));
        echo "
        <!-- BEGIN: CONTENT/FEATURES/FEATURES-8 -->
        <div class=\"c-content-box c-size-md c-bg-white\" id=\"home2\">
            ";
        // line 46
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "service", array()), "html", null, true));
        echo "
           
        </div>
        <!-- END: CONTENT/FEATURES/FEATURES-8 -->


        <!-- 维权援助开始   c-content-box c-size-md c-bg-parallax  -->
        <div id=\"home3\" class=\"c-content-box c-size-md c-bg-parallax\" style=\"background-image: url(";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
        echo "/themes/property/assets/base/img/content/backgrounds/bg-85.jpg)\">
            ";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "assistance", array()), "html", null, true));
        echo "
           
        </div>


        <!--维权援助结束 -->

        <!-- BEGIN: CONTENT/FEATURES/FEATURES-15-1 -->
        <div id=\"home4\" class=\"c-content-feature-15 c-bg-img-center\" style=\"background-image: url(";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["base_path"] ?? null), "html", null, true));
        echo "/themes/property/assets/base/img/content/backgrounds/banner_4.jpg)\">
            ";
        // line 63
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "edu", array()), "html", null, true));
        echo "
            
        </div>
        <!-- END: CONTENT/FEATURES/FEATURES-15-1 -->

        <div class=\"container-fluid\">
            ";
        // line 69
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "supervise", array()), "html", null, true));
        echo "
            
        </div>
        <!-- END: CONTENT/STATS/COUNTER-2 -->
        <!-- END: PAGE CONTENT -->
    </div>
    <!-- END: PAGE CONTAINER -->
    <!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
    <a name=\"footer\"></a>
    <footer class=\"c-layout-footer c-layout-footer-6 c-bg-grey-1\">
        ";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
        
    </footer>
    <!-- END: LAYOUT/FOOTERS/FOOTER-6 -->
    <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
    <div class=\"c-layout-go2top\">
        <i class=\"icon-arrow-up\"></i>
    </div>
</body>";
    }

    public function getTemplateName()
    {
        return "themes/property/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 79,  146 => 69,  137 => 63,  133 => 62,  122 => 54,  118 => 53,  108 => 46,  102 => 43,  87 => 31,  70 => 17,  66 => 16,  62 => 15,  55 => 11,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/property/templates/page--front.html.twig", "D:\\TWAMP\\htdocs\\drupal\\themes\\property\\templates\\page--front.html.twig");
    }
}
