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

/* themes/custom/guillermina_theme/templates/page--node--10.html.twig */
class __TwigTemplate_92fbbdb6e87d2630540b3fbe1c48d7f1 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "impulsa-talento"), "html", null, true);
        yield "\"><strong>Impulsa talento aquí</strong></a>
          </div>
        </div>
      </div>
    </header>

    ";
        // line 88
        yield "    <section class=\"bt-hero text-white\" style=\"background-image:url('";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/9.png');\">
      <div class=\"container\">
        <div class=\"row align-items-end\">
          <div class=\"col-lg-8 bt-hero-content\">

            <p class=\"bt-hero-title\">
              Sé parte de la transformación: impulsa el talento con tu apoyo.
            </p>

            <a href=\"";
        // line 97
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "implusa-talento"), "html", null, true);
        yield "\" class=\"btn btn-light btn-lg bt-final-btn\">
              <strong>Sí quiero impulsar el talento</strong>
            </a>
          </div>
        </div>
      </div>

      ";
        // line 105
        yield "      <div class=\"bt-hero-shape\"></div>
    </section>

    ";
        // line 109
        yield "    <section class=\"bt-intro\">
      <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
          <div class=\"col-12 col-lg-10 col-xl-8\">

            <h2 class=\"bt-intro-title\">
              <span class=\"fw-normal\">
              La transformación comienza con una decisión: apoyar a quienes tienen
              el talento y los sueños, pero necesitan una oportunidad. En la Fundación ACRES,
              cada contribución se convierte en becas, acompañamiento y proyectos que fortalecen
              la ingeniería y generan impacto social duradero.
              </span>
            </h2>
          </div>
        </div>
      </div>
    </section>

    ";
        // line 128
        yield "    <section class=\"bt-solucion\">
      <div class=\"container\">
        <div class=\"row align-items-center\">

          <!-- Columna TEXTO -->
          <div class=\"col-12 col-lg-6\">
          <h2 class=\"bt-test-title2\"style=\"color:#333333;\"><strong>Empresas e inversionistas</strong></h2>

          <p class=\"bt-intro-title3 fw-normal\">
            Tu inversión social es capital estratégico. Canalizamos los recursos de manera eficiente
            para que cada aporte se traduzca en formación de jóvenes ingenieros, proyectos de infraestructura
            con valor social y un legado de prosperidad para las comunidades.
          </p>

          <a href=\"";
        // line 142
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "implusa-talento"), "html", null, true);
        yield "\" class=\"btn btn-dark btn-lg bt-final-btn\">
                <strong>Haz que tu inversión construya futuro</strong>
              </a>
        </div>

        <!-- Columna ILUSTRACIÓN -->
          <div class=\"col-12 col-lg-6\">
            <div class=\"bt-sol-illustration text-center\">
            <img
              src=\"";
        // line 151
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/07.png\"
              alt=\"Talentos ingeniería\"
              class=\"bt-sol-img\"
            >
            <div class=\"bt-sol-shape\"></div>
            </div>
          </div>

        </div>
      </div>
    </section>

    ";
        // line 164
        yield "    <section class=\"bt-solucion\">
      <div class=\"container\">
        <div class=\"row align-items-center gy-5 flex-lg-row-reverse\">

          <!-- Columna TEXTO -->
          <div class=\"col-12 col-lg-6\">
            <h2 class=\"bt-test-title2\"style=\"color:#333333;\"><strong>Profesionales y mentores</strong></h2>

              <p class=\"bt-intro-title3 fw-normal\">
                Tu experiencia es guía y motivación. Al unirte como mentor, inspiras a la próxima generación de talentos,
                ayudándolos a navegar su carrera profesional y a tomar decisiones clave para su futuro.
              </p>

              <a href=\"";
        // line 177
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "implusa-talento"), "html", null, true);
        yield "\" class=\"btn btn-dark btn-lg bt-final-btn\">
                <strong>Sé el mentor que enciende el potencial</strong>
              </a>

          </div>

          <!-- Columna ILUSTRACIÓN -->
          <div class=\"col-12 col-lg-6\">
            <div class=\"bt-sol-illustration text-center\">
              <img
                src=\"";
        // line 187
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/08.png\"
                alt=\"Estrategia Talentos ingeniería\"
                class=\"bt-sol-img\"
              >
            <div class=\"bt-sol-shape\"></div>
          </div>
        </div>

        </div>
      </div>
    </section>

    ";
        // line 200
        yield "    <section class=\"bt-solucion\">
      <div class=\"container\">
        <div class=\"row align-items-center\">

          <!-- Columna TEXTO -->
          <div class=\"col-12 col-lg-6\">
          <h2 class=\"bt-test-title2\"style=\"color:#333333;\"><strong>Todos los que quieren marcar la diferencia</strong></h2>

          <p class=\"bt-intro-title3 fw-normal\">
            Cada donación cuenta. Con tu aporte, haces posible que más jóvenes permanezcan en la universidad y
            se conviertan en ingenieros que transforman su entorno.
          </p>

          <a href=\"";
        // line 213
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "donar"), "html", null, true);
        yield "\" class=\"btn btn-dark btn-lg bt-final-btn\">
                <strong>Haz tu donación aquí</strong>
              </a>
        </div>

        <!-- Columna ILUSTRACIÓN -->
          <div class=\"col-12 col-lg-6\">
            <div class=\"bt-sol-illustration text-center\">
            <img
              src=\"";
        // line 222
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/09.png\"
              alt=\"Talentos ingeniería\"
              class=\"bt-sol-img\"
            >
            <div class=\"bt-sol-shape\"></div>
            </div>
          </div>

        </div>
      </div>
    </section>

    ";
        // line 235
        yield "    <section class=\"bt-final-cta\" role=\"region\" aria-label=\"Cierre y llamado a la acción\">
      <div class=\"bt-final-bg\" style=\"background-image:url('";
        // line 236
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/banners_final.png');\"></div>
      <div class=\"bt-final-overlay\"></div>

      <div class=\"container\">
        <div class=\"bt-final-content text-center\">
          <h2 class=\"bt-final-title\">
            Cada talento que logra graduarse abre nuevas oportunidades para su vida, su familia y su comunidad. Con tu apoyo,
            podrán culminar sus estudios, acceder a mejores oportunidades y aportar al desarrollo de la región. Este es el
            momento de actuar
          </h2>

        </div>
      </div>
    </section>

    ";
        // line 252
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 252), "html", null, true);
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
        // line 294
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Fundación ACRES. Todos los derechos reservados.</small>
        </div>
      </div>
    </div>
  </footer>


    <js-bottom-placeholder token=\"";
        // line 301
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
        return "themes/custom/guillermina_theme/templates/page--node--10.html.twig";
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
        return array (  439 => 301,  429 => 294,  383 => 252,  365 => 236,  362 => 235,  347 => 222,  335 => 213,  320 => 200,  305 => 187,  292 => 177,  277 => 164,  262 => 151,  250 => 142,  234 => 128,  214 => 109,  209 => 105,  199 => 97,  186 => 88,  177 => 79,  170 => 75,  166 => 74,  160 => 71,  146 => 60,  137 => 54,  129 => 49,  126 => 48,  121 => 45,  107 => 34,  102 => 31,  88 => 19,  84 => 18,  80 => 16,  74 => 12,  69 => 10,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  47 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/guillermina_theme/templates/page--node--10.html.twig", "C:\\xampp\\htdocs\\guillermina\\web\\themes\\custom\\guillermina_theme\\templates\\page--node--10.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 3, "safe_join" => 6, "t" => 12, "date" => 294];
        static $functions = ["path" => 18];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'safe_join', 't', 'date'],
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
