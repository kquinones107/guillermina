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

/* themes/custom/guillermina_theme/templates/page--node--12.html.twig */
class __TwigTemplate_b4c95b65602431fcdf0c545859cadf33 extends Template
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

    <section class=\"section-padding bg-light\">
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-lg-8\">

            <h2 class=\"text-center mb-4 fw-bold\">Construyamos juntos un futuro lleno de talento y oportunidades</h2>
            <p class=\"text-center mb-5\">
              Tu apoyo puede marcar la diferencia en la vida de un joven y en el desarrollo de toda una comunidad.
              En la Fundación ACRES creemos en el poder de las alianzas: empresas, profesionales y ciudadanos comprometidos
              que deciden convertir la inversión social en transformación real.
            </p>

            <!-- 🔹 Formulario -->
            <form method=\"POST\" novalidate class=\"p-4 bg-white shadow rounded contact-form\">
              <h3 class=\"mb-4 fw-bold\">Formulario de contacto</h3>

              <!-- Nombre -->
              <div class=\"mb-3\">
                <label for=\"name\" class=\"form-label\">Nombre completo</label>
                <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Escribe tu nombre\">
              </div>

              <!-- Correo y Teléfono -->
              <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                  <label for=\"email\" class=\"form-label\">Correo electrónico</label>
                  <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"tucorreo@ejemplo.com\">
                </div>
                <div class=\"col-md-6 mb-3\">
                  <label for=\"phone\" class=\"form-label\">Teléfono (WhatsApp)</label>
                  <input type=\"tel\" class=\"form-control\" id=\"phone\" placeholder=\"+57 3xx xxx xxxx\">
                  <small class=\"text-muted\">Queremos poder contactarte más fácil.</small>
                </div>
              </div>

              <!-- Intereses -->
              <div class=\"mb-3\">
                <label class=\"form-label fw-bold\">Me interesa (selecciona una o varias opciones)</label>
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"aliado\">
                  <label class=\"form-check-label\" for=\"aliado\">Ser Aliado Estratégico (empresa u organización)</label>
                </div>
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"donar\">
                  <label class=\"form-check-label\" for=\"donar\">Donar recursos para becas y programas</label>
                </div>
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"mentor\">
                  <label class=\"form-check-label\" for=\"mentor\">Ser Mentor o Voluntario</label>
                </div>
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"colaborar\">
                  <label class=\"form-check-label\" for=\"colaborar\">Proponer una iniciativa o colaboración</label>
                </div>
                <div class=\"form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" id=\"conocer\">
                  <label class=\"form-check-label\" for=\"conocer\">Conocer más sobre la Fundación</label>
                </div>
              </div>

              <!-- Mensaje -->
              <div class=\"mb-3\">
                <label for=\"message\" class=\"form-label\">Mensaje (opcional)</label>
                <textarea class=\"form-control\" id=\"message\" rows=\"4\" placeholder=\"Cuéntanos tu idea, propuesta o interés\"></textarea>
              </div>

              <!-- Botón -->
              <div class=\"text-center\">
                <button type=\"submit\" class=\"btn btn-dark btn-lg bt-final-btn\">
                  Quiero empezar a transformar vida
                </button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>


    ";
        // line 166
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 166), "html", null, true);
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
        // line 208
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Fundación ACRES. Todos los derechos reservados.</small>
        </div>
      </div>
    </div>
  </footer>


    <js-bottom-placeholder token=\"";
        // line 215
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
        return "themes/custom/guillermina_theme/templates/page--node--12.html.twig";
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
        return array (  322 => 215,  312 => 208,  266 => 166,  177 => 79,  170 => 75,  166 => 74,  160 => 71,  146 => 60,  137 => 54,  129 => 49,  126 => 48,  121 => 45,  107 => 34,  102 => 31,  88 => 19,  84 => 18,  80 => 16,  74 => 12,  69 => 10,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  47 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/guillermina_theme/templates/page--node--12.html.twig", "C:\\xampp\\htdocs\\guillermina\\web\\themes\\custom\\guillermina_theme\\templates\\page--node--12.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 3, "safe_join" => 6, "t" => 12, "date" => 208];
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
