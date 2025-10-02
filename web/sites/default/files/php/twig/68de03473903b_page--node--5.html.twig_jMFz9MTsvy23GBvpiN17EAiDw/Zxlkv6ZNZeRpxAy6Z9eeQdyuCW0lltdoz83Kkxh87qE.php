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

/* themes/custom/guillermina_theme/templates/page--node--5.html.twig */
class __TwigTemplate_beda8e8cad3d0d19755d8e73b7b5f39f extends Template
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
            <a class=\"btn btn-light btn-lg bt-final-btn\" href=href=\"";
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
        yield "/assets/images/3.png');\">
      <div class=\"container\">
        <div class=\"row align-items-end\">
          <div class=\"col-lg-8 bt-hero-content\">
            <h1 class=\"visually-hidden\">Beca talentos para la ingeniería</h1>
            <p class=\"bt-hero-kicker\">Beca talentos para la ingeniería</p>

            <p class=\"bt-hero-title\">
              Talentos que permanecen, una industria que se fortalece.
            </p>

            <a href=\"";
        // line 99
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "implusa-talento"), "html", null, true);
        yield "\" class=\"btn btn-light btn-lg bt-final-btn\">
              <strong>Quiero apoyar Talentos</strong>
            </a>
          </div>
        </div>
      </div>

      ";
        // line 107
        yield "      <div class=\"bt-hero-shape\"></div>
    </section>

    ";
        // line 111
        yield "    <section class=\"bt-intro\">
      <div class=\"container-fluid\">
        <div class=\"row justify-content-center\">
          <div class=\"col-12 col-lg-10 col-xl-8\">

            <h2 class=\"bt-intro-title\">
              <span class=\"fw-normal\">La deserción universitaria en programas de ingeniería es uno de los mayores retos para la industria y el desarrollo del país.
              En la Fundación ACRES creemos que ningún joven con talento debería abandonar sus estudios por falta de recursos
              Por eso creamos nuestras Becas ACRES, un programa que elimina barreras y acompaña integralmente a los estudiantes para que culminen su formación.
              </br></br><h2 class=\"bt-test-title2\"style=\"color:#333333;\">El desafio</h2></br>
              Cada año, cientos de jóvenes de estratos 1 y 2 ven interrumpido su sueño de convertirse en ingenieros por dificultades económicas o académicas.
              Esta realidad limita no solo su futuro, sino también el crecimiento de la industria y el progreso de las comunidades.
              </span>
            </h2>
          </div>
        </div>
      </div>
    </section>

    ";
        // line 131
        yield "    <section class=\"bt-solucion\">
      <div class=\"container\">
        <div class=\"row align-items-center\">

          <!-- Columna TEXTO -->
          <div class=\"col-12 col-lg-6\">
          <h2 class=\"bt-test-title2\"style=\"color:#333333;\"><strong>Nuestra solución</strong></h2>

          <p class=\"bt-intro-title3 fw-normal\">
            Con nuestras becas y un acompañamiento integral:
          </p>

          <ul class=\"bt-sol-list\">
            <li><span class=\"chk\"></span> Eliminamos las barreras económicas que impiden la permanencia.</li>
            <li><span class=\"chk\"></span> Brindamos apoyo académico y formativo.</li>
            <li><span class=\"chk\"></span> Fortalecemos las capacidades de los talentos para que se enfoquen en lo más importante: convertirse en profesionales de alto impacto.</li>
          </ul>
        </div>

        <!-- Columna ILUSTRACIÓN -->
          <div class=\"col-12 col-lg-6\">
            <div class=\"bt-sol-illustration text-center\">
            <img
              src=\"";
        // line 154
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/01.png\"
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
        // line 167
        yield "    <section class=\"bt-solucion\">
      <div class=\"container\">
        <div class=\"row align-items-center gy-5 flex-lg-row-reverse\">

          <!-- Columna TEXTO -->
          <div class=\"col-12 col-lg-6\">
            <h2 class=\"bt-test-title2\"style=\"color:#333333;\"><strong>El resultado</strong></h2>

              <p class=\"bt-intro-title3 fw-normal\">
                El potencial de cada estudiante se transforma en capital humano altamente calificado:
                ingenieros capaces de fortalecer la industria, liderar proyectos estratégicos y
                aportar al desarrollo sostenible de las regiones.
              </p>

          </div>

          <!-- Columna ILUSTRACIÓN -->
          <div class=\"col-12 col-lg-6\">
            <div class=\"bt-sol-illustration text-center\">
              <img
                src=\"";
        // line 187
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/02.png\"
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
        yield "    <section class=\"bt-como\" style=\"background-color:#333333;\">
      <div class=\"container\">
        <h2 class=\"bt-test-title2 fw-normal text-center mt-4\"style=\"color:#FECA35;\"><strong>¿Cómo acompañamos?</br></strong></h2>

        <div class=\"row g-4\">
          <!-- Tarjeta 1 -->
          <div class=\"col-12 col-md-6 col-lg-3\">
            <article class=\"como-card\">
              <div>
              <img
                src=\"";
        // line 210
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/icono_10.png\"
              >
              </div>
              <h2 class=\"bt-test-title2\" style=\"color:#FECA35;\">Educación financiera</h2>
              <span class=\"bt-intro-title2 fw-normal\">
                Enseñamos a los jóvenes a administrar sus recursos. Queremos que aprendan a planear,
                ahorrar y tomar decisiones financieras inteligentes, para que su futuro profesional esté
                acompañado de estabilidad económica y autonomía personal.
              </span>
            </article>
          </div>

          <!-- Tarjeta 2 -->
          <div class=\"col-12 col-md-6 col-lg-3\">
            <article class=\"como-card\">
              <div>
              <img
                src=\"";
        // line 227
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/icono_9.png\"
              >
              </div>
            <h2 class=\"bt-test-title2\" style=\"color:#FECA35;\">Power</br> skills</h2>
            <span class=\"bt-intro-title2 fw-normal\">
              Además de la excelencia académica, impulsamos competencias transversales como liderazgo,
              comunicación, trabajo en equipo y gestión de proyectos. Estas habilidades fortalecen su
              perfil y los convierten en profesionales integrales.
            </span>
            </article>
          </div>

          <!-- Tarjeta 3 -->
            <div class=\"col-12 col-md-6 col-lg-3\">
            <article class=\"como-card\">
              <div>
                <img
                  src=\"";
        // line 244
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/icono_11.png\"
                >
              </div>
            <h2 class=\"bt-test-title2\" style=\"color:#FECA35;\">Seguimiento a la excelencia</h2>
            <span class=\"bt-intro-title2 fw-normal\">
              Acompañamos a cada estudiante en su formación, evaluando sus necesidades por semestre,
              apoyándolos en momentos clave y preparándolos para prácticas y proyectos, para que
              alcancen su máximo potencia.
            </span>
          </article>
        </div>

        <!-- Tarjeta 4 -->
          <div class=\"col-12 col-md-6 col-lg-3\">
            <article class=\"como-card\">
              <div>
                <img
                  src=\"";
        // line 261
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/icono_12.png\"
                >
              </div>
              <h2 class=\"bt-test-title2\" style=\"color:#FECA35;\">Ruta hacia la empleabilidad</h2>
              <span class=\"bt-intro-title2 fw-normal\">
                Preparamos a los talentos para dar el salto al mundo laboral. A través de prácticas,
                pasantías y alianzas con empresas del sector, diseñamos una ruta clara hacia su
                inserción profesional.
              </span>
            </article>
          </div>
        </div>
      </div>
    </section>

    ";
        // line 277
        yield "    <section class=\"bt-mapa\">
      <div class=\"container\">
        <div class=\"row justify-content-center\">
          <div class=\"col-12 col-lg-10\">
            <header class=\"text-center mb-3\">
              <h2 class=\"bt-test-title2\"style=\"color:#333333;\"><strong>¿Dónde están nuestros talentos?</strong></h2>
              <p class=\"bt-intro-title3 fw-normal\">
                En diferentes regiones de Colombia, talentos ACRES construyen su futuro.
              </p>
            </header>

            <figure class=\"bt-mapa-frame\">
              ";
        // line 290
        yield "              <img
                src=\"";
        // line 291
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/mapa.png\"
                alt=\"Regiones con talentos ACRES en Colombia\"
                class=\"bt-mapa-img\"
              >
          </div>
          <div class=\"text-center\">
              <a href=\"";
        // line 297
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "implusa-talento"), "html", null, true);
        yield "\" class=\"btn btn-dark btn-lg bt-final-btn\">
                <strong>Quiero apoyar a más jóvenes de la región</strong>
              </a>
            </div>
        </div>
      </div>
    </section>

    ";
        // line 306
        yield "    <section class=\"bt-testimonios\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-12\">
            <h2 class=\"bt-test-title2\"style=\"color:#333333;\"><strong>Voces que inspiran</strong></h2>
            <p class=\"bt-intro-title3 fw-normal\">
              Los testimonios de nuestros talentos muestran cómo una beca puede cambiar no solo una vida, sino el destino de una comunidad.
            </p>
          </div>
        </div>

        <div class=\"row g-4 bt-test-grid\">
          ";
        // line 319
        yield "          <div class=\"col-12 col-md-6 col-xl-4\">
            <article class=\"bt-test-card\">
              <div class=\"bt-test-media\">
                <img src=\"";
        // line 322
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/T1.png\" alt=\"Testimonio 1\">
              </div>
              <div class=\"bt-test-overlay\">
                <h2 class=\"bt-test-title2\" style=\"color:#FECA35;\">
                <strong>Juan Felipe Navas</strong>
                </h2>
              </div>
              <span class=\"bt-test-accent\"></span>
              <a href=\"#\" class=\"stretched-link\" aria-label=\"Leer testimonio 1\"></a>
            </article>
          </div>

          ";
        // line 335
        yield "          <div class=\"col-12 col-md-6 col-xl-4\">
            <article class=\"bt-test-card\">
              <div class=\"bt-test-media\">
                <img src=\"";
        // line 338
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/T2.png\" alt=\"Testimonio 2\">
              </div>
              <div class=\"bt-test-overlay\">
                <h2 class=\"bt-test-title2\" style=\"color:#FECA35;\">
                <strong>Natalia Valentina Bravo</strong>
                </h2>
              </div>
              <span class=\"bt-test-accent\"></span>
              <a href=\"#\" class=\"stretched-link\" aria-label=\"Leer testimonio 2\"></a>
            </article>
          </div>

          ";
        // line 351
        yield "          <div class=\"col-12 col-md-6 col-xl-4\">
            <article class=\"bt-test-card\">
              <div class=\"bt-test-media\">
                <img src=\"";
        // line 354
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/T3.png\" alt=\"Testimonio 3\">
              </div>
              <div class=\"bt-test-overlay\">
              <h2 class=\"bt-test-title2\" style=\"color:#FECA35;\">
                <strong>Cristopher Angola</strong>
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
        // line 370
        yield "    <section class=\"bt-final-cta\" role=\"region\" aria-label=\"Cierre y llamado a la acción\">
      <div class=\"bt-final-bg\" style=\"background-image:url('";
        // line 371
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/banners_final.png');\"></div>
      <div class=\"bt-final-overlay\"></div>

      <div class=\"container\">
        <div class=\"bt-final-content text-center\">
          <h2 class=\"bt-final-title\">
            Si crees que todos tienen derecho a una vida de oportunidades y justicia,
            sin importar dónde vivan, y si crees que la gente común puede cambiar
            el mundo, entonces únete a nosotros.
          </h2>

          <a href=\"/se-parte#talentos-region\"
            class=\"btn btn-light btn-lg bt-final-btn\"
            aria-label=\"Quiero apoyar a un joven de región\">
            <strong>Quiero apoyar a un joven de región</strong>
          </a>
        </div>
      </div>
    </section>

    ";
        // line 392
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 392), "html", null, true);
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
        // line 434
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Fundación ACRES. Todos los derechos reservados.</small>
        </div>
      </div>
    </div>
  </footer>


    <js-bottom-placeholder token=\"";
        // line 441
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
        return "themes/custom/guillermina_theme/templates/page--node--5.html.twig";
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
        return array (  600 => 441,  590 => 434,  544 => 392,  521 => 371,  518 => 370,  500 => 354,  495 => 351,  480 => 338,  475 => 335,  460 => 322,  455 => 319,  441 => 306,  430 => 297,  421 => 291,  418 => 290,  404 => 277,  386 => 261,  366 => 244,  346 => 227,  326 => 210,  314 => 200,  299 => 187,  277 => 167,  262 => 154,  237 => 131,  216 => 111,  211 => 107,  201 => 99,  186 => 88,  177 => 79,  170 => 75,  166 => 74,  160 => 71,  146 => 60,  137 => 54,  129 => 49,  126 => 48,  121 => 45,  107 => 34,  102 => 31,  88 => 19,  84 => 18,  80 => 16,  74 => 12,  69 => 10,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  47 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/guillermina_theme/templates/page--node--5.html.twig", "C:\\xampp\\htdocs\\guillermina\\web\\themes\\custom\\guillermina_theme\\templates\\page--node--5.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 3, "safe_join" => 6, "t" => 12, "date" => 434];
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
