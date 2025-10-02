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

/* themes/custom/guillermina_theme/templates/page--node--4.html.twig */
class __TwigTemplate_e31ecd30c94bdaf01aa7f1fe43b02ad6 extends Template
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
        yield "\">Talentos alumni</a></li>
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

   <section class=\"bt-hero text-white\" style=\"background-image:url('";
        // line 85
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/2.png');\">
      <div class=\"container\">
        <div class=\"row align-items-end\">
          <div class=\"col-lg-8 bt-hero-content2\">
            <p class=\"bt-hero-title\">
              Impulsamos el talento que transforma la ingeniería y el desarrollo regional.
            </p>

            <a href=\"";
        // line 93
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "implusa-talento"), "html", null, true);
        yield "\" class=\"btn btn-light btn-lg bt-final-btn\"\">
              <strong>Únete a nuestra red de impacto</strong>
            </a>
          </div>
        </div>
      </div>

         ";
        // line 101
        yield "      <div class=\"bt-hero-shape\"></div>
    </section>

    ";
        // line 105
        yield "    <section class=\"bt-intro\">
      <div class=\"bt-intro-text\">
        <div class=\"row justify-content-center\">
          <div class=\"col-12 col-lg-10 col-xl-8\">

            <h2 class=\"bt-intro-title\">

              <span class=\"fw-normal\">En ACRES trabajamos para que los jóvenes talentos de la ingeniería no abandonen sus estudios
              y logren convertirse en profesionales que impacten positivamente a la industria y a sus comunidades.
              Nuestra misión es clara: convertir la inversión social en oportunidades reales que fortalezcan la educación,
              la competitividad empresarial y el desarrollo sostenible.

              </br>
              <span class=\"mt-4\"><stron>Conectamos tres fuerzas transformadoras:</stron></span>
              <ul class=\"qh-list\">
                <li>La inversión social de empresas visionarias.</li>
                <li>La excelencia académica de universidades acreditadas.</li>
                <li>El potencial humano de jóvenes comprometidos.</li>
              </ul>
              </span>
              <span class=\"fw-normal\"> Este modelo estratégico asegura que cada talento tenga el apoyo necesario para
              completar su formación y convertirse en un profesional de alto impacto.</span>
            </h2>

          </div>
        </div>
      </div>
    </section>

    ";
        // line 137
        yield "
    <section class=\"section-padding\" style=\"background-color:#A9CCE3;\">
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-lg-10\">

            <div class=\"qh-feature d-flex align-items-center\">
              <div class=\"qh-feature__icon\">
                <img src=\"";
        // line 145
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/icono_20.png\" alt=\"icono red impacto\">
              </div>
              <div class=\"qh-feature__body\">
                <h2 class=\"bt-test-title2\"><strong>Nuestra red de impacto</strong></h2>
                <p>
                  La educación es el catalizador más poderoso del cambio social. Por eso, unimos a
                  los actores clave de la industria, la academia y el sector social para generar un
                  legado de oportunidades y prosperidad en todo el país.
                </p>
              </div>
            </div>

            <div class=\"qh-feature d-flex align-items-center\">
              <div class=\"qh-feature__icon\">
                <img src=\"";
        // line 159
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/icono_21.png\" alt=\"icono alianzas\">
              </div>
              <div class=\"qh-feature__body\">
                <h2 class=\"bt-test-title2\"><strong>Alianzas estratégicas</strong></h2>
                <p>
                  Trabajamos junto a la Cámara Colombiana de la Infraestructura, universidades y
                  empresas aliadas para diseñar proyectos innovadores que fortalecen comunidades.
                  Con análisis de datos y experiencia técnica, transformamos necesidades en
                  soluciones concretas.
                </p>
              </div>
            </div>

            <div class=\"qh-feature d-flex align-items-center\">
              <div class=\"qh-feature__icon\">
                <img src=\"";
        // line 174
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/icono_22.png\" alt=\"icono incidencia\">
              </div>
              <div class=\"qh-feature__body\">
                <h2 class=\"bt-test-title2\"><strong>Incidencia y visibilidad</strong></h2>
                <p>
                  Llevamos nuestra propuesta a los principales tomadores de decisiones para
                  posicionar la inversión en talentos de la ingeniería como una estrategia de
                  competitividad y desarrollo social sostenible. Al mismo tiempo, damos voz a
                  nuestros talentos y comunidades a través de campañas que inspiran a más
                  organizaciones a sumarse a esta transformación.
                </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>


    ";
        // line 195
        yield "    <main id=\"main-content\" class=\"pb-5\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-10\">
            ";
        // line 199
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 199), "links"), "html", null, true);
        yield "
          </div>
        </div>
      </div>
    </main>

    ";
        // line 206
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 206), "html", null, true);
        yield "

    <footer class=\"footer bg-dark text-white pt-5 pb-3\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Columna izquierda -->
        <div class=\"col-md-6 mb-4 mb-md-0\">
          <h5 class=\"fw-bold mb-3\">Fundación ACRES</h5>
          <ul class=\"list-unstyled\">
            <li><a href=\"/quienes-somos\" class=\"footer-link\">Quiénes somos</a></li>
            <li><a href=\"/informacion-legal\" class=\"footer-link\">Información legal</a></li>
            <li><a href=\"/contacto\" class=\"footer-link\">Contacto</a></li>
            <li><a href=\"/politica-privacidad\" class=\"footer-link\">Política de privacidad</a></li>
            <li><a href=\"/tratamiento-datos\" class=\"footer-link\">Tratamiento de datos</a></li>
          </ul>
        </div>

        <!-- Columna derecha -->
        <div class=\"col-md-6\">
          <h5 class=\"fw-bold mb-3\">Síguenos en redes</h5>
          <div class=\"d-flex gap-3\">
            <a href=\"https://facebook.com\" target=\"_blank\" class=\"footer-icon\">
              <i class=\"fab fa-facebook fa-lg\"></i>
            </a>
            <a href=\"https://instagram.com\" target=\"_blank\" class=\"footer-icon\">
              <i class=\"fab fa-instagram fa-lg\"></i>
            </a>
            <a href=\"https://twitter.com\" target=\"_blank\" class=\"footer-icon\">
              <i class=\"fab fa-twitter fa-lg\"></i>
            </a>
            <a href=\"https://linkedin.com\" target=\"_blank\" class=\"footer-icon\">
              <i class=\"fab fa-linkedin fa-lg\"></i>
            </a>
          </div>
        </div>

      </div>

      <!-- Línea inferior -->
      <div class=\"row mt-4\">
        <div class=\"col text-center\">
          <small>&copy; ";
        // line 248
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Fundación ACRES. Todos los derechos reservados.</small>
        </div>
      </div>
    </div>
  </footer>


    <js-bottom-placeholder token=\"";
        // line 255
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
        return "themes/custom/guillermina_theme/templates/page--node--4.html.twig";
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
        return array (  382 => 255,  372 => 248,  326 => 206,  317 => 199,  311 => 195,  288 => 174,  270 => 159,  253 => 145,  243 => 137,  212 => 105,  207 => 101,  197 => 93,  186 => 85,  177 => 79,  170 => 75,  166 => 74,  160 => 71,  146 => 60,  137 => 54,  129 => 49,  126 => 48,  121 => 45,  107 => 34,  102 => 31,  88 => 19,  84 => 18,  80 => 16,  74 => 12,  69 => 10,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  47 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/guillermina_theme/templates/page--node--4.html.twig", "C:\\xampp\\htdocs\\guillermina\\web\\themes\\custom\\guillermina_theme\\templates\\page--node--4.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 3, "safe_join" => 6, "t" => 12, "without" => 199, "date" => 248];
        static $functions = ["path" => 18];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'safe_join', 't', 'without', 'date'],
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
