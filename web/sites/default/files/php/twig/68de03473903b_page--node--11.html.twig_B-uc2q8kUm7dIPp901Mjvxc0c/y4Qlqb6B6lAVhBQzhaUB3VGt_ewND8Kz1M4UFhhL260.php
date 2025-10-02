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

/* themes/custom/guillermina_theme/templates/page--node--11.html.twig */
class __TwigTemplate_6d4dbeac54408c494a94fec9ba2e1fa3 extends Template
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
        yield "/assets/images/logo_guillermina.png\" alt=\"Logo Fundación Acres\">
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
        yield "/assets/images/010.png');\">
      <div class=\"container\">
        <div class=\"row align-items-end\">
          <div class=\"col-lg-8 bt-hero-content2\">
            <p class=\"bt-hero-title\">
              Apoyo financiero, mentoría y empleabilidad para que más mujeres
              se gradúen como ingenieras y lideren el futuro del país.
            </p>

            <a href=\"";
        // line 94
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "donar"), "html", null, true);
        yield "\" class=\"btn btn-dark btn-lg bt-final-btn\">
              <strong>Apoya el talento femenino</strong>
            </a>
            <a href=\"";
        // line 97
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "implusa-talento"), "html", null, true);
        yield "\" class=\"btn btn-light btn-lg bt-final-btn\">
              <strong>Postúlate a la beca</strong>
            </a>
          </div>
        </div>
      </div>

         ";
        // line 105
        yield "      <div class=\"bt-hero-shape\"></div>
    </section>

    <section class=\"seccion-metas\">
  <div class=\"container\">
    <h2 class=\"bt-test-title2\"style=\"color:#333333;\">
      <strong>Nuestra meta: más mujeres ingenieras graduadas en Colombia</strong>
    </h2>
    <span class=\"bt-intro-title3 fw-normal\">
      La Beca Guillermina es un movimiento que une universidades, empresas y
      personas comprometidas con la equidad de género en la ingeniería.
      Juntos, queremos lograr para 2026:
    </span>

    <div class=\"contador-grid\">
      <div class=\"contador-box\">
        <span class=\"count\" data-target=\"100\">0</span>
        <span class=\"bt-intro-title3 fw-normal\">Mujeres becadas en programas de ingeniería.</span>
      </div>
      <div class=\"contador-box\">
        <span class=\"count\" data-target=\"20\">0</span>
        <span class=\"bt-intro-title3 fw-normal\">Universidades aliadas en distintas regiones de Colombia. </span>
      </div>
      <div class=\"contador-box\">
        <span class=\"count\" data-target=\"50\">0</span>
        <span class=\"bt-intro-title3 fw-normal\">Organizaciones patrocinadoras vinculadas. </span>
      </div>
    </div>
  </div>
</section>

 ";
        // line 137
        yield "    <section class=\"bt-solucion\">
      <div class=\"container\">
        <div class=\"row align-items-center\">

          <!-- Columna TEXTO -->
          <div class=\"col-12 col-lg-6\">
          <h2 class=\"bt-test-title2\"style=\"color:#333333;\"><strong>¿Qué es la beca Guillermina y por qué transforma vidas en Colombia?</strong></h2>

          <p class=\"bt-intro-title3 fw-normal\">
            La beca Guillermina, creada por ACRES, es un programa que impulsa el talento femenino en ingeniería en Colombia.
            Su propósito es garantizar que más mujeres con excelencia académica y compromiso social puedan permanecer
            en la universidad, superar barreras económicas y graduarse como ingenieras líderes.
            </br></br>
            Más que una beca, es un ecosistema de oportunidades que combina:
          </p>

          <ul class=\"bt-sol-list\">
            <li><span class=\"chk\"></span>Apoyo económico para sostenimiento.</li>
            <li><span class=\"chk\"></span>Entrenamiento en “Power Skills” (liderazgo, innovación, comunicación) </li>
            <li><span class=\"chk\"></span>Mentorías personalizadas con líderes de la industria.</li>
            <li><span class=\"chk\"></span>Acceso a prácticas y empleabilidad en empresas aliadas.</li>
          </ul>

          <p class=\"bt-intro-title3 fw-normal\">
            La beca Guillermina forma a nuevas generaciones de ingenieras capaces de aportar al desarrollo social,
            económico y sostenible del país, inspirando a más mujeres a seguir sus pasos.
          </p>

        </div>

        <!-- Columna ILUSTRACIÓN -->
          <div class=\"col-12 col-lg-6\">
            <div class=\"bt-sol-illustration text-center\">
            <img
              src=\"";
        // line 171
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/011.png\"
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
        // line 184
        yield "    <section class=\"bt-solucion\">
      <div class=\"container\">
        <div class=\"row align-items-center gy-5 flex-lg-row-reverse\">

          <!-- Columna TEXTO -->
          <div class=\"col-12 col-lg-6\">
            <h2 class=\"bt-test-title2\"style=\"color:#333333;\"><strong>¿Quiénes pueden postularse a la beca Guillermina en Colombia? </strong></h2>

              <p class=\"bt-intro-title3 fw-normal\">
                La beca Guillermina está dirigida a mujeres estudiantes de ingeniería en Colombia que sueñan con graduarse y convertirse en referentes de la profesión.
                Si cumples con los requisitos, este programa es para ti.
                </br></br>
                <strong>Requisitos de postulación:</strong>
              </p>

              <ul class=\"bt-sol-list\">
                <li><span class=\"chk\"></span>Estar matriculada en quinto semestre de un programa de Ingeniería en  Universidades aliadas.</li>
                <li><span class=\"chk\"></span>Haber aprobado al menos el 80% de los créditos del semestre actual.</li>
                <li><span class=\"chk\"></span>Tener un promedio acumulado de 3,5 o más.</li>
                <li><span class=\"chk\"></span>Pertenecer a estratos 1, 2 o 3.</li>
                <li><span class=\"chk\"></span>No contar con sanciones académicas ni disciplinarias.</li>
              </ul>

              <p class=\"bt-intro-title3 fw-normal\">
                <strong>Pasos del proceso:</strong>
              </p>

            <ul class=\"bt-sol-list\">
                <li><span class=\"chk\"></span>1. Postulación en línea a través del formulario oficial. </li>
                <li><span class=\"chk\"></span>2. Presentación de una carta o video motivacional (1 minuto).</li>
                <li><span class=\"chk\"></span>3. Evaluación de mérito, compromiso y liderazgo. </li>
                <li><span class=\"chk\"></span>4. Revisión académica y socioeconómica de documentos.</li>
              </ul>

              <a href=\"";
        // line 218
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "implusa-talento"), "html", null, true);
        yield "\" class=\"btn btn-dark btn-lg bt-final-btn\">
                <strong>Postúlate a la beca Guillermina</strong>
              </a>

          </div>

          <!-- Columna ILUSTRACIÓN -->
          <div class=\"col-12 col-lg-6\">
            <div class=\"bt-sol-illustration text-center\">
              <img
                src=\"";
        // line 228
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/012.png\"
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
        // line 241
        yield "    <section class=\"bt-solucion\">
      <div class=\"container\">
        <div class=\"row align-items-center\">

          <!-- Columna TEXTO -->
          <div class=\"col-12 col-lg-6\">
          <h2 class=\"bt-test-title2\"style=\"color:#333333;\"><strong>Beneficios de la beca Guillermina para mujeres en ingeniería</strong></h2>

          <p class=\"bt-intro-title3 fw-normal\">
            La beca Guillermina no es solo un apoyo económico. Es un ecosistema de oportunidades diseñado para que más mujeres en Colombia
            logren graduarse como ingenieras y desarrollen todo su potencial.
          </p>

          <ul class=\"bt-sol-list\">
            <li><span class=\"chk\"></span>Académicos y financieros.</li>
            <li><span class=\"chk\"></span>Apoyo económico para matrícula y sostenimiento.</li>
            <li><span class=\"chk\"></span>Acompañamiento académico y psicosocial que fortalece la permanencia universitaria.</li>
            <li><span class=\"chk\"></span>Mentoría y acompañamiento.</li>
            <li><span class=\"chk\"></span>Mentoría especializada con líderes de la ingeniería y la infraestructura.</li>
            <li><span class=\"chk\"></span>Red de apoyo con profesionales y voluntarios del sector.</li>
            <li><span class=\"chk\"></span>Crecimiento profesional.</li>
            <li><span class=\"chk\"></span>Acceso a prácticas y oportunidades laborales en empresas aliadas.</li>
            <li><span class=\"chk\"></span>Formación en liderazgo, innovación y equidad de género. </li>
          </ul>

          <p class=\"bt-intro-title3 fw-normal\">
            Con la beca Guillermina, cada estudiante recibe el impulso necesario para convertirse en una ingeniera
            líder que transforma su vida, su comunidad y el país.
          </p>

        </div>

        <!-- Columna ILUSTRACIÓN -->
          <div class=\"col-12 col-lg-6\">
            <div class=\"bt-sol-illustration text-center\">
            <img
              src=\"";
        // line 277
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/013.png\"
              alt=\"Talentos ingeniería\"
              class=\"bt-sol-img\"
            >
            <div class=\"bt-sol-shape\"></div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class=\"aliados-section\">
    <div class=\"aliados-container\">
      <h2 class=\"bt-test-title2\"style=\"color:#333333;\"><strong>Aliados estratégicos de la beca Guillermina</strong></h2>

    <p class=\"bt-intro-title3 fw-normal\">
            El impacto de la beca Guillermina es posible gracias a las alianzas con universidades, empresas y
            organizaciones que creen en la educación como motor de transformación social y económica.
             Cada aliado es parte fundamental de este movimiento por la equidad de género en la ingeniería.
          </p>

  <div class=\"logo-slider-horizontal\" aria-label=\"Carrusel de logos aliados\">
    <div class=\"logo-track-horizontal\">
      <!-- Logos -->
      <div class=\"logo-item\"><img src=\"";
        // line 302
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/logo_1.png\" alt=\"OPAIN S.A.\" /></div>
      <div class=\"logo-item\"><img src=\"";
        // line 303
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/logo_2.png\" alt=\"CCI Recorte\" /></div>
      <div class=\"logo-item\"><img src=\"";
        // line 304
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/logo_3.png\" alt=\"INC\" /></div>
      <div class=\"logo-item\"><img src=\"";
        // line 305
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/logo_4.png\" alt=\"CCI Seccional Occidente\" /></div>
      <div class=\"logo-item\"><img src=\"";
        // line 306
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/logo_5.png\" alt=\"Logo Principal CCI\" /></div>

      <!-- Duplicados para el bucle infinito -->
      <div class=\"logo-item\"><img src=\"";
        // line 309
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/logo_1.png\" alt=\"OPAIN S.A.\" aria-hidden=\"true\" /></div>
      <div class=\"logo-item\"><img src=\"";
        // line 310
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/logo_2.png\" alt=\"CCI Recorte\" aria-hidden=\"true\" /></div>
      <div class=\"logo-item\"><img src=\"";
        // line 311
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/logo_3.png\" alt=\"INC\" aria-hidden=\"true\" /></div>
      <div class=\"logo-item\"><img src=\"";
        // line 312
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/logo_4.png\" alt=\"CCI Seccional Occidente\" aria-hidden=\"true\" /></div>
      <div class=\"logo-item\"><img src=\"";
        // line 313
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/logo_5.png\" alt=\"Logo Principal CCI\" aria-hidden=\"true\" /></div>
    </div>
  </div>
  </div>
</section>

        <section id=\"dona-ahora\" class=\"sec-donar py-5 py-lg-6\">
      <div class=\"container\">

        <!-- Encabezado -->
        <div class=\"row justify-content-center\">
          <div class=\"col-xl-10\">
            <div class=\"text-center mt-4\">
            <a href=\"";
        // line 326
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "donar"), "html", null, true);
        yield "\" class=\"btn btn-dark btn-lg bt-final-btn\">
              <strong>Donar Ahora</strong>
            </a>
            </div>

            <p class=\"bt-intro-title3 fw-normal\"> </br>
              Cuando una mujer se gradúa como ingeniera, transforma su vida, impulsa a su
              familia, fortalece su comunidad y aporta al desarrollo del país. Con tu donación,
              más jóvenes podrán cumplir ese sueño y convertirse en líderes del futuro.
            </p>

            <p class=\"bt-intro-title3 fw-normal\">
              <span class=\"bt-intro-title3 fw-normal\"><strong>Nuestra meta:</strong></span>
              que para 2030, <strong>1.000 mujeres ingenieras</strong> culminen sus
              estudios y se conviertan en agentes de cambio en Colombia.
            </p>
          </div>
        </div>

        <!-- Planes -->
        <div class=\"row g-4 align-items-stretch\">
          <!-- Card 1 -->
          <div class=\"col-md-6 col-lg-4\">
            <article class=\"plan-card h-100\">
              <div class=\"plan-icon\">
                <span class=\"dot\"></span>
              </div>
              <h2 class=\"bt-test-title2\"style=\"color:#333333;\"><strong>Donación única</strong></h2>
              <p class=\"bt-intro-title3 fw-normal\">Un aporte directo que impacta la vida de una estudiante.</p>
            </article>
          </div>

          <!-- Card 2 -->
          <div class=\"col-md-6 col-lg-4\">
            <article class=\"plan-card h-100\">
              <div class=\"plan-icon\">
                <span class=\"dot\"></span>
              </div>
              <h2 class=\"bt-test-title2\"style=\"color:#333333;\"><strong>Donación mensual</strong></h2>
              <p class=\"bt-intro-title3 fw-normal\">
                Un apoyo constante que asegura la permanencia académica de más mujeres.
              </p>
            </article>
          </div>

          <!-- Card 3 -->
          <div class=\"col-md-6 col-lg-4\">
            <article class=\"plan-card h-100 plan-card--empresa\">
              <div class=\"plan-icon\">
                <span class=\"dot\"></span>
              </div>
              <h2 class=\"bt-test-title2\"style=\"color:#333333;\"><strong>Donación empresarial</strong></h2>
              <p class=\"bt-intro-title3 fw-normal\">
                Inversión social estratégica para organizaciones comprometidas con la equidad de género.
              </p>
            </article>
          </div>
        </div>

        <!-- CTA -->
        <div class=\"text-center mt-4\">
          <a href=\"";
        // line 387
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "donar"), "html", null, true);
        yield "\" class=\"btn btn-outline-dark btn-lg bt-final-btn\">
              <strong>Dona y transforma Aquí</strong>
            </a>
        </div>

      </div>
    </section>

    ";
        // line 398
        yield "    <section id=\"ingenieras\" class=\"talentos section-padding\">
      <div class=\"container\">
        <h2 class=\"bt-test-title2 text-center\" style=\"color:#333333;\"><strong>Ingenieras Guillermina</strong></h2>

        <p class=\"bt-intro-title3 fw-normal text-center\">
          Las ingenieras vinculadas a la beca Guillermina son jóvenes talentosas que, gracias a esta iniciativa,
          han trazado caminos y abierto nuevas oportunidades en el campo de la ingeniería.
        </p>

        <div class=\"row g-2 talentos-grid justify-content-center\">
          ";
        // line 409
        yield "          <div class=\"col-12 col-sm-6 col-lg-3\">
            <article class=\"talento-card animate-in\">
              <figure class=\"talento-media\">
                <img src=\"";
        // line 412
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/23.png\" alt=\"Yudis Montecino sonriendo\">
              </figure>
              <div class=\"talento-body\">
                <h2 class=\"bt-test-title2\" style=\"color:#333333;\"><strong>Yudis Montecino</strong></h2>
                <p class=\"talento-loc\">Sahagún, Córdoba</p>
                <p class=\"bt-intro-title3 fw-normal\">
                  Estudiante de Ingeniería Civil en la Universidad Nacional. Hoy cursa doble titulación en
                  INSA Toulouse Francia. Desde la Costa Caribe hasta Europa, proyectándose como una ingeniera global
                </p>
              </div>
            </article>
          </div>

          ";
        // line 426
        yield "          <div class=\"col-12 col-sm-6 col-lg-3\">
            <article class=\"talento-card animate-in\">
              <figure class=\"talento-media\">
                <img src=\"";
        // line 429
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/22.png\" alt=\"Valeria Robles usando el móvil\">
              </figure>
              <div class=\"talento-body\">
                <h2 class=\"bt-test-title2\" style=\"color:#333333;\"><strong>Valeria Robles</strong></h2>
                <p class=\"talento-loc\">Villavicencio</p>
                <p class=\"bt-intro-title3 fw-normal\">
                  Ingeniera Industrial de la Universidad Nacional (Bogotá), con MBA en EE. UU.
                  Hoy es empresaria que conecta innovación y desarrollo entre Colombia y Estados Unidos.
                </p>

              </div>
            </article>
          </div>
        </div>

        <div class=\"text-center mt-4\">
          <a href=\"";
        // line 445
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "donar"), "html", null, true);
        yield "\" class=\"btn btn-outline-dark btn-lg bt-final-btn\">
            Apoya nuevas historias de éxito
          </a>
        </div>
      </div>
    </section>


    ";
        // line 454
        yield "    <section id=\"faq\" class=\"section-padding bg-light\">
      <div class=\"container\">
        <div class=\"row justify-content-center mb-4\">
          <div class=\"col-lg-9 text-center\">
            <h2 class=\"display-6 fw-bold mb-2\">Preguntas frecuentes</h2>
            <p class=\"text-muted lead mb-0\">
              Aquí encontrarás respuestas a las dudas más comunes sobre la Beca Guillermina:
              requisitos, convocatorias, beneficios y cómo participar.
            </p>
          </div>
        </div>

        <div class=\"row justify-content-center\">
          <div class=\"col-lg-9\">

            <div class=\"accordion accordion-flush faq-accordion\" id=\"faqAccordion\">

              <!-- 1 -->
              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"faq1-h\">
                  <button class=\"accordion-button collapsed\" type=\"button\"
                          data-bs-toggle=\"collapse\" data-bs-target=\"#faq1\"
                          aria-expanded=\"false\" aria-controls=\"faq1\">
                    1. ¿Cuándo se abren las convocatorias?
                  </button>
                </h2>
                <div id=\"faq1\" class=\"accordion-collapse collapse\" aria-labelledby=\"faq1-h\" data-bs-parent=\"#faqAccordion\">
                  <div class=\"accordion-body\">
                    Las fechas de postulación se publican en esta página y en los canales oficiales de la Fundación ACRES.
                  </div>
                </div>
              </div>

              <!-- 2 -->
              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"faq2-h\">
                  <button class=\"accordion-button collapsed\" type=\"button\"
                          data-bs-toggle=\"collapse\" data-bs-target=\"#faq2\"
                          aria-expanded=\"false\" aria-controls=\"faq2\">
                    2. ¿Qué universidades participan en el programa?
                  </button>
                </h2>
                <div id=\"faq2\" class=\"accordion-collapse collapse\" aria-labelledby=\"faq2-h\" data-bs-parent=\"#faqAccordion\">
                  <div class=\"accordion-body\">
                    Actualmente trabajamos con universidades aliadas en distintas regiones del país, comprometidas con la equidad y el liderazgo femenino.
                    <br>
                    <a class=\"link-primary fw-semibold\" href=\"/universidades-aliadas\">Ver lista de universidades aliadas</a>
                  </div>
                </div>
              </div>

              <!-- 3 -->
              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"faq3-h\">
                  <button class=\"accordion-button collapsed\" type=\"button\"
                          data-bs-toggle=\"collapse\" data-bs-target=\"#faq3\"
                          aria-expanded=\"false\" aria-controls=\"faq3\">
                    3. ¿Qué cubre la beca?
                  </button>
                </h2>
                <div id=\"faq3\" class=\"accordion-collapse collapse\" aria-labelledby=\"faq3-h\" data-bs-parent=\"#faqAccordion\">
                  <div class=\"accordion-body\">
                    <ul class=\"mb-0 ps-3\">
                      <li>Apoyo financiero equivalente a <strong>1 SMLMV por semestre</strong>.</li>
                      <li>Entrenamiento en <strong>finanzas personales</strong>.</li>
                      <li>Formación en <strong>Power Skills</strong>.</li>
                      <li><strong>Mentoría</strong> con profesionales de la ingeniería.</li>
                      <li>Acceso a <strong>oportunidades laborales</strong> en empresas aliadas.</li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- 4 -->
              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"faq4-h\">
                  <button class=\"accordion-button collapsed\" type=\"button\"
                          data-bs-toggle=\"collapse\" data-bs-target=\"#faq4\"
                          aria-expanded=\"false\" aria-controls=\"faq4\">
                    4. ¿Puedo aplicar si ya estoy en mitad de carrera?
                  </button>
                </h2>
                <div id=\"faq4\" class=\"accordion-collapse collapse\" aria-labelledby=\"faq4-h\" data-bs-parent=\"#faqAccordion\">
                  <div class=\"accordion-body\">
                    Sí. La beca está dirigida a estudiantes a partir de <strong>quinto semestre</strong>.
                    <br>
                    <a class=\"link-primary fw-semibold\" href=\"/requisitos-y-postulacion\">Revisa los requisitos y postúlate</a>
                  </div>
                </div>
              </div>

              <!-- 5 -->
              <div class=\"accordion-item\">
                <h2 class=\"accordion-header\" id=\"faq5-h\">
                  <button class=\"accordion-button collapsed\" type=\"button\"
                          data-bs-toggle=\"collapse\" data-bs-target=\"#faq5\"
                          aria-expanded=\"false\" aria-controls=\"faq5\">
                    5. ¿Cómo puedo ser mentor o voluntario del programa?
                  </button>
                </h2>
                <div id=\"faq5\" class=\"accordion-collapse collapse\" aria-labelledby=\"faq5-h\" data-bs-parent=\"#faqAccordion\">
                  <div class=\"accordion-body\">
                    Si eres ingeniera, profesional del sector o líder con experiencia, puedes vincularte como mentor o voluntario en talleres y actividades formativas.
                    <br>
                    <a class=\"link-primary fw-semibold\" href=\"/mentoria-voluntariado\">Quiero ser mentor/voluntario</a>
                  </div>
                </div>
              </div>

            </div>

            <!-- Bloque cierre + CTA -->
            <div class=\"text-center mt-5\">
              <span class=\"bt-intro-title3 fw-normal\">
                Estamos convencidos de que apoyar la educación es transformar el país. Con tu ayuda, más mujeres podrán graduarse como ingenieras,
                convertirse en líderes y abrir el camino a nuevas generaciones.
              </span>
              <span class=\"bt-intro-title3 fw-normal\">
                Cada aporte cuenta. Con tu apoyo, hacemos posible que más jóvenes lleguen a la meta y cambien el rumbo de la ingeniería en Colombia.
              </span>
            </div>

            <div class=\"text-center mt-4\">
              <a href=\"";
        // line 577
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "donar"), "html", null, true);
        yield "\" class=\"btn btn-outline-dark btn-lg bt-final-btn\">
                Apoyar con mi donación
              </a>
            </div>

          </div>
        </div>
      </div>
    </section>




    ";
        // line 591
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 591), "html", null, true);
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
        // line 633
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Fundación ACRES. Todos los derechos reservados.</small>
        </div>
      </div>
    </div>
  </footer>


    <js-bottom-placeholder token=\"";
        // line 640
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
        return "themes/custom/guillermina_theme/templates/page--node--11.html.twig";
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
        return array (  822 => 640,  812 => 633,  766 => 591,  750 => 577,  625 => 454,  614 => 445,  595 => 429,  590 => 426,  574 => 412,  569 => 409,  557 => 398,  546 => 387,  482 => 326,  466 => 313,  462 => 312,  458 => 311,  454 => 310,  450 => 309,  444 => 306,  440 => 305,  436 => 304,  432 => 303,  428 => 302,  400 => 277,  362 => 241,  347 => 228,  334 => 218,  298 => 184,  283 => 171,  247 => 137,  214 => 105,  204 => 97,  198 => 94,  186 => 85,  177 => 79,  170 => 75,  166 => 74,  160 => 71,  146 => 60,  137 => 54,  129 => 49,  126 => 48,  121 => 45,  107 => 34,  102 => 31,  88 => 19,  84 => 18,  80 => 16,  74 => 12,  69 => 10,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  47 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/guillermina_theme/templates/page--node--11.html.twig", "C:\\xampp\\htdocs\\guillermina\\web\\themes\\custom\\guillermina_theme\\templates\\page--node--11.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 3, "safe_join" => 6, "t" => 12, "date" => 633];
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
