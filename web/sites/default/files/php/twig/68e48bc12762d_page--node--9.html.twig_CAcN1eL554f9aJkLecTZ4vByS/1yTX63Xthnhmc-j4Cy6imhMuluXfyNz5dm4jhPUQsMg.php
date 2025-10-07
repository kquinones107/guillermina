<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/guillermina_theme/templates/page--node--9.html.twig */
class __TwigTemplate_194ab9b7be63eac89c91f9693aa09b11 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 3
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "getId", [], "any", false, false, true, 3), "html", null, true);
        yield "\">
  <head>
    <head-placeholder token=\"";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
    <title>";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["head_title"] ?? null), " | "));
        yield "</title>
    <css-placeholder token=\"";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
    <js-placeholder token=\"";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
  </head>
  <body";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Saltar al contenido principal"));
        yield "
    </a>

    ";
        // line 16
        yield "    <header class=\"navbar navbar-expand-lg navbar-dark fixed-top custom-navbar\">
      <div class=\"container\">
        <a class=\"navbar-brand d-flex align-items-center\" href=\"";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "home"), "html", null, true);
        yield "\">
          <img src=\"";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/logo_acres-01.png\" alt=\"Logo Fundación Acres\">
        </a>

        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#main-menu\" aria-controls=\"main-menu\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"main-menu\">
          <ul class=\"navbar-nav ms-4 fw-bold\">
           ";
        // line 31
        yield "          <li class=\"nav-item dropdown\">
            <a
              class=\"nav-link dropdown-toggle\"
              href=\"";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "que-hacemos"), "html", null, true);
        yield "\"
              id=\"qhDropdown\"
              role=\"button\"
              data-bs-toggle=\"dropdown\"
              data-bs-auto-close=\"outside\"
              aria-expanded=\"false\"
            >
              Qué hacemos
            </a>

            <ul class=\"dropdown-menu shadow-sm\" aria-labelledby=\"qhDropdown\">
              <li><a class=\"dropdown-item\" href=\"";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "beca-talentos"), "html", null, true);
        yield "\">Beca talentos para la ingeniería</a></li>

              ";
        // line 48
        yield "              <li>
              <a class=\"dropdown-item\" href=\"";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "beca-guillermina"), "html", null, true);
        yield "\">
               Beca Guillermina
              </a>
            </li>

            <li><a class=\"dropdown-item\" href=\"";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "obras-labor-social"), "html", null, true);
        yield "\">Obras con labor social</a></li>
          </ul>
        </li>
            <li class=\"nav-item dropdown\">
            <a
              class=\"nav-link dropdown-toggle\"
              href=\"";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "quienes-somos"), "html", null, true);
        yield "\"
              id=\"qhDropdown\"
              role=\"button\"
              data-bs-toggle=\"dropdown\"
              data-bs-auto-close=\"outside\"
              aria-expanded=\"false\"
            >
              Quienes somos
            </a>

            <ul class=\"dropdown-menu shadow-sm\" aria-labelledby=\"qhDropdown\">
              <li><a class=\"dropdown-item\" href=\"";
        // line 71
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "talentos-alumni"), "html", null, true);
        yield "\">Talentos Alumni</a></li>
          </ul>
        </li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "impacto"), "html", null, true);
        yield "\">Impacto</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "contacto"), "html", null, true);
        yield "\">Contacto</a></li>
          </ul>

          <div class=\"ms-auto\">
            <a class=\"btn btn-light btn-lg bt-final-btn\" href=\"";
        // line 79
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "implusa-talento"), "html", null, true);
        yield "\"><strong>Impulsa talento aquí</strong></a>
          </div>
        </div>
      </div>
    </header>

    ";
        // line 88
        yield "   <section class=\"bt-hero text-white\" style=\"background-image:url('";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/6.png');\">
      <div class=\"container\">
        <div class=\"row align-items-end\">
          <div class=\"col-lg-8 bt-hero-content\">
            <h1 class=\"visually-hidden\">Beca talentos para la ingeniería</h1>

            <p class=\"bt-hero-title\">
              Potenciamos a los talentos de la ingeniería para que cada acción se traduzca en progreso y oportunidades para las regiones
            </p>

            <a href=\"";
        // line 98
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "implusa-talento"), "html", null, true);
        yield "\" class=\"btn btn-light btn-lg bt-final-btn\">
              <strong>Quiero apoyar Talentos</strong>
            </a>
          </div>
        </div>
      </div>

      ";
        // line 106
        yield "      <div class=\"bt-hero-shape\"></div>
    </section>

    <section class=\"ols-road\">
      <div class=\"container\">
        <h2 class=\"bt-test-title2 fw-normal text-center mt-4\"><strong>Nuestro impacto en cifras</strong></h2>


        <ul class=\"tl\">
          <!-- 2019 -->
          <li class=\"tl-item left\">
            <span class=\"tl-dot\"></span>
            <article class=\"tl-card shadow-tq\">
              <h3 class=\"tl-year\">2019</h3>
              <p>Estudiantes apoyados: <strong>76</strong></p>
            </article>
          </li>

          <!-- 2020 -->
          <li class=\"tl-item right\">
            <span class=\"tl-dot\"></span>
            <article class=\"tl-card shadow-tq\">
              <h3 class=\"tl-year\">2020</h3>
              <ul class=\"tl-list\">
                <li>Estudiantes apoyados: <strong>61</strong></li>
                <li>Plan Padrino: <strong>7</strong> estudiantes activos</li>
                <li>Empresas sponsors: <strong>4</strong></li>
              </ul>
            </article>
          </li>

          <!-- 2021 -->
          <li class=\"tl-item left\">
            <span class=\"tl-dot\"></span>
            <article class=\"tl-card shadow-tq\">
              <h3 class=\"tl-year\">2021</h3>
              <ul class=\"tl-list\">
                <li>Estudiantes apoyados: <strong>91</strong></li>
                <li>Plan Padrino: <strong>14</strong> estudiantes activos</li>
                <li>Empresas sponsors: <strong>6</strong></li>
              </ul>
            </article>
          </li>

          <!-- 2022 -->
          <li class=\"tl-item right\">
            <span class=\"tl-dot\"></span>
            <article class=\"tl-card shadow-tq\">
              <h3 class=\"tl-year\">2022</h3>
              <ul class=\"tl-list\">
                <li>Estudiantes apoyados: <strong>107</strong></li>
                <li>Plan Padrino: <strong>32</strong> estudiantes activos</li>
                <li>Empresas sponsors: <strong>10</strong></li>
              </ul>
            </article>
          </li>

          <!-- 2023 -->
          <li class=\"tl-item left\">
            <span class=\"tl-dot\"></span>
            <article class=\"tl-card shadow-tq\">
              <h3 class=\"tl-year\">2023</h3>
              <ul class=\"tl-list\">
                <li>Estudiantes apoyados: <strong>110</strong></li>
                <li>Plan Padrino: <strong>47</strong> estudiantes activos</li>
                <li>Empresas sponsors: <strong>15</strong></li>
              </ul>
            </article>
          </li>

          <!-- 2024 -->
          <li class=\"tl-item right\">
            <span class=\"tl-dot\"></span>
            <article class=\"tl-card shadow-tq\">
              <h3 class=\"tl-year\">2024</h3>
              <ul class=\"tl-list\">
                <li>Estudiantes apoyados: <strong>95</strong></li>
                <li>Plan Padrino: <strong>55</strong> estudiantes activos</li>
                <li>Empresas sponsors: <strong>15</strong> (sin variación frente a 2023)</li>
              </ul>
            </article>
          </li>
        </ul>
      </div>
    </section>




    ";
        // line 196
        yield "    <section class=\"bt-testimonios\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <h2 class=\"bt-test-title2\"style=\"color:#333333;\"><strong>Voces que inspiran</strong></h2>
            <span class=\"bt-intro-title3 fw-normal text-center\">
              Los testimonios de nuestros talentos muestran cómo una beca puede cambiar no solo una vida,
              sino el destino de una comunidad. </br></br>
            </span>
          </div>
        </div>

        <div class=\"row g-4 bt-test-grid\">
          ";
        // line 210
        yield "          <div class=\"col-12 col-md-6 col-xl-4\">
            <article class=\"bt-test-card\">
              <div class=\"bt-test-media\">
                <img src=\"";
        // line 213
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/T4.png\" alt=\"Testimonio 1\">
              </div>
              <div class=\"bt-test-overlay\">
                <h2 class=\"bt-test-title2\" style=\"color:#FECA35;\">
                <strong>Nathalia De la Rans</strong>
                </h2>
              </div>
              <span class=\"bt-test-accent\"></span>
              <a href=\"#\" class=\"stretched-link\" aria-label=\"Leer testimonio 1\"></a>
            </article>
          </div>

          ";
        // line 226
        yield "          <div class=\"col-12 col-md-6 col-xl-4\">
            <article class=\"bt-test-card\">
              <div class=\"bt-test-media\">
                <img src=\"";
        // line 229
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/T6.png\" alt=\"Testimonio 2\">
              </div>
              <div class=\"bt-test-overlay\">
                <h2 class=\"bt-test-title2\" style=\"color:#FECA35;\">
                <strong>Michael Stefan Espejo</strong>
                </h2>
              </div>
              <span class=\"bt-test-accent\"></span>
              <a href=\"#\" class=\"stretched-link\" aria-label=\"Leer testimonio 2\"></a>
            </article>
          </div>

          ";
        // line 242
        yield "          <div class=\"col-12 col-md-6 col-xl-4\">
            <article class=\"bt-test-card\">
              <div class=\"bt-test-media\">
                <img src=\"";
        // line 245
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/T5.png\" alt=\"Testimonio 3\">
              </div>
              <div class=\"bt-test-overlay\">
                <h2 class=\"bt-test-title2\" style=\"color:#FECA35;\">
                <strong>Lizbeth Escobar Cortes</strong>
                </h2>
              </div>
              <span class=\"bt-test-accent\"></span>
              <a href=\"#\" class=\"stretched-link\" aria-label=\"Leer testimonio 3\"></a>
            </article>
          </div>
        </div>
      </div>
    </section>

    ";
        // line 261
        yield "    <section class=\"bt-final-cta\" role=\"region\" aria-label=\"Cierre y llamado a la acción\">
      <div class=\"bt-final-bg\" style=\"background-image:url('";
        // line 262
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/banners_final2.png');\"></div>
      <div class=\"bt-final-overlay\"></div>

      <div class=\"container\">
        <div class=\"bt-final-content text-center\">
          <h2 class=\"bt-final-title\" style=\"color:#33333;\">
            Información Legal
          </h2>

          <a href=\"/se-parte#talentos-region\"
            class=\"btn btn-light btn-lg bt-final-btn\"
            aria-label=\"Quiero apoyar a un joven de región\">
            <strong>Conoce más</strong>
          </a>
        </div>
      </div>
    </section>


    ";
        // line 282
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 282), "html", null, true);
        yield "

    <js-bottom-placeholder token=\"";
        // line 284
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["language", "placeholder_token", "head_title", "attributes", "directory", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/guillermina_theme/templates/page--node--9.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  410 => 284,  404 => 282,  382 => 262,  379 => 261,  361 => 245,  356 => 242,  341 => 229,  336 => 226,  321 => 213,  316 => 210,  301 => 196,  210 => 106,  200 => 98,  186 => 88,  177 => 79,  170 => 75,  166 => 74,  160 => 71,  146 => 60,  137 => 54,  129 => 49,  126 => 48,  121 => 45,  107 => 34,  102 => 31,  88 => 19,  84 => 18,  80 => 16,  74 => 12,  69 => 10,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  47 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/guillermina_theme/templates/page--node--9.html.twig", "C:\\xampp\\htdocs\\guillermina\\web\\themes\\custom\\guillermina_theme\\templates\\page--node--9.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 3, "safe_join" => 6, "t" => 12];
        static $functions = ["path" => 18];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'safe_join', 't'],
                ['path'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
