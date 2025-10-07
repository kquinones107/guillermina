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

/* themes/custom/guillermina_theme/templates/page--node--3.html.twig */
class __TwigTemplate_18b25108105f47ddf2b84ba47564b155 extends Template
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  </head>
  <body";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Saltar al contenido principal"));
        yield "
    </a>

    ";
        // line 17
        yield "    <header class=\"navbar navbar-expand-lg navbar-dark fixed-top custom-navbar\">
      <div class=\"container\">
        <a class=\"navbar-brand d-flex align-items-center\" href=\"";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "home"), "html", null, true);
        yield "\">
          <img src=\"";
        // line 20
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
        // line 32
        yield "          <li class=\"nav-item dropdown\">
            <a
              class=\"nav-link dropdown-toggle\"
              href=\"";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "que-hacemos"), "html", null, true);
        yield "\"
              id=\"qhDropdown\"
              role=\"button\"
              data-bs-toggle=\"dropdown\"
              data-bs-auto-close=\"outside\"
              aria-expanded=\"false\"
            >
              Qué Hacemos
            </a>

            <ul class=\"dropdown-menu shadow-sm\" aria-labelledby=\"qhDropdown\">
              <li><a class=\"dropdown-item\" href=\"";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "beca-talentos"), "html", null, true);
        yield "\">Beca talentos para la ingeniería</a></li>

              ";
        // line 49
        yield "              <li>
              <a class=\"dropdown-item\" href=\"";
        // line 50
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "beca-guillermina"), "html", null, true);
        yield "\">
               Beca Guillermina
              </a>
            </li>

            <li><a class=\"dropdown-item\" href=\"";
        // line 55
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "obras-labor-social"), "html", null, true);
        yield "\">Obras con labor social</a></li>
          </ul>
        </li>
            <li class=\"nav-item dropdown\">
            <a
              class=\"nav-link dropdown-toggle\"
              href=\"";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "quienes-somos"), "html", null, true);
        yield "\"
              id=\"qhDropdown\"
              role=\"button\"
              data-bs-toggle=\"dropdown\"
              data-bs-auto-close=\"outside\"
              aria-expanded=\"false\"
            >
              Quienes Somos
            </a>

            <ul class=\"dropdown-menu shadow-sm\" aria-labelledby=\"qhDropdown\">
              <li><a class=\"dropdown-item\" href=\"";
        // line 72
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "talentos-alumni"), "html", null, true);
        yield "\">Talentos alumni</a></li>
          </ul>
        </li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "impacto"), "html", null, true);
        yield "\">Impacto</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "contacto"), "html", null, true);
        yield "\">Contacto</a></li>
          </ul>

          <div class=\"ms-auto\">
            <a class=\"btn btn-light btn-lg bt-final-btn\" href=\"";
        // line 80
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "implusa-talento"), "html", null, true);
        yield "\"><strong>Impulsa talento aquí</strong></a>
          </div>
        </div>
      </div>
    </header>

    ";
        // line 89
        yield "   <section class=\"bt-hero text-white\" style=\"background-image:url('";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/1.png');\">
      <div class=\"container\">
        <div class=\"row align-items-end\">
          <div class=\"col-lg-8 bt-hero-content\">

            <p class=\"bt-hero-title2\">
              Invertimos en talentos de la Ingeniería para transformar
              comunidades y construir futuro, conectando a jóvenes con gran
              potencial, universidades de excelencia y empresas comprometidas
              para generar desarrollo sostenible y oportunidades que perduran.
            </p>

            <a href=\"";
        // line 101
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "implusa-talento"), "html", null, true);
        yield "\" class=\"btn btn-dark btn-lg bt-final-btn\">
              <strong>Quiero apoyar Talentos</strong>
            </a>
          </div>
        </div>
      </div>

      ";
        // line 109
        yield "      <div class=\"bt-hero-shape\"></div>
    </section>

    <section class=\"bt-como\" style=\"background-color:#333333;\">
      <div class=\"container\">
      <h2 class=\"bt-test-title2 fw-normal text-center mt-4\"style=\"color:#FECA35;\"><strong>Nuestro impacto</strong></h2>
        <h2 class=\"bt-intro-title2\">
          <span class=\"fw-normal\">
            En ACRES, conectamos jóvenes con gran potencial, universidades
            de calidad y empresas comprometidas para generar impacto social y desarrollo sostenible.
          </span>
        </h2>

        <div class=\"row justify-content-center g-4\">
          <!-- Tarjeta 1 -->
          <div class=\"col-12 col-md-4 col-lg-4\">
            <article class=\"como-card\">
              <div>
              <img
                src=\"";
        // line 128
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/icono_6.png\"
              >
              </div>
              <h2 class=\"bt-test-title2\" style=\"color:#FECA35;\">Jóvenes</h2>
              <span class=\"bt-intro-title2 fw-normal\">
                De estratos 1 y 2 becados en programas de ingeniería.
              </span>
            </article>
          </div>

          <!-- Tarjeta 2 -->
          <div class=\"col-12 col-md-4 col-lg-4\">
            <article class=\"como-card\">
              <div>
                <img
                  src=\"";
        // line 143
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/icono_5.png\"
                >
              </div>
              <h2 class=\"bt-test-title2\" style=\"color:#FECA35;\">Universidades</h2>
              <span class=\"bt-intro-title2 fw-normal\">
                De alta calidad aliadas en diferentes regiones del país.
              </span>
            </article>
          </div>

          <!-- Tarjeta 3 -->
          <div class=\"col-12 col-md-4 col-lg-4\">
            <article class=\"como-card\">
              <div>
              <img
                src=\"";
        // line 158
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/icono_7.png\"
              >
              </div>
              <h2 class=\"bt-test-title2\" style=\"color:#FECA35;\">Empresas</h2>
              <span class=\"bt-intro-title2 fw-normal\">
                Que confían en la ingeniería como motor de progreso.
              </span>
            </article>
          </div>
        </div>

        <p class=\"bt-intro-title2 fw-normal text-center mt-4\">
          Cada talento apoyado abre un camino de oportunidades, fortalece la industria y transforma comunidades enteras.
        </p>
      </div>
    </section>

          <section class=\"aliados-section\">
      <div class=\"aliados-container\">
        <h2 class=\"bt-test-title2\"style=\"color:#333333;\"><strong>Nuestros aliados</strong></h2>

    <div class=\"logo-slider-horizontal\" aria-label=\"Carrusel de logos aliados\">
      <div class=\"logo-track-horizontal\">
        <!-- Logos -->
        <div class=\"logo-item\"><img src=\"";
        // line 182
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/1.png\" alt=\"OPAIN S.A.\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 183
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/2.png\" alt=\"CCI Recorte\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 184
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/3.png\" alt=\"INC\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 185
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/4.png\" alt=\"CCI Seccional Occidente\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 186
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/5.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 187
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/6.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 188
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/7.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 189
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/8.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 190
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/9.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 191
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/10.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 192
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/11.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 193
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/12.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 194
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/13.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 195
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/14.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 196
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/15.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 197
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/16.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 198
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/17.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 199
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/18.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 200
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/19.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 201
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/20.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 202
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/21.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 203
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/22.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 204
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/23.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 205
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/24.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 206
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/25.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 207
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/26.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 208
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/27.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 209
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/28.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 210
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/29.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 211
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/30.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 212
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/31.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 213
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/32.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 214
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/33.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 215
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/34.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 216
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/35.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 217
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/36.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 218
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/37.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 219
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/38.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 220
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/39.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 221
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/40.png\" alt=\"Logo Principal CCI\" /></div>



        <!-- Duplicados para el bucle infinito -->
        <div class=\"logo-item\"><img src=\"";
        // line 226
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/1.png\" alt=\"OPAIN S.A.\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 227
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/2.png\" alt=\"CCI Recorte\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 228
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/3.png\" alt=\"INC\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 229
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/4.png\" alt=\"CCI Seccional Occidente\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 230
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/5.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 231
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/6.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 232
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/7.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 233
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/8.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 234
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/9.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 235
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/10.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 236
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/11.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 237
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/12.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 238
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/13.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 239
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/14.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 240
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/15.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 241
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/16.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 242
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/17.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 243
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/18.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 244
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/19.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 245
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/20.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 246
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/21.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 247
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/22.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 248
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/23.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 249
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/24.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 250
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/25.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 251
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/26.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 252
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/27.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 253
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/28.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 254
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/29.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 255
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/30.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 256
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/31.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 257
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/32.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 258
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/33.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 259
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/34.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 260
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/35.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 261
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/36.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 262
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/37.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 263
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/38.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 264
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/39.png\" alt=\"Logo Principal CCI\" /></div>
        <div class=\"logo-item\"><img src=\"";
        // line 265
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/Logos_Aliados/40.png\" alt=\"Logo Principal CCI\" /></div>
      </div>
    </div>
    </div>
  </section>


    ";
        // line 273
        yield "    <section class=\"bt-final-cta\" role=\"region\" aria-label=\"Cierre y llamado a la acción\">
      <div class=\"bt-final-bg\" style=\"background-image:url('";
        // line 274
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/images/banners_final.png');\"></div>
      <div class=\"bt-final-overlay\"></div>

      <div class=\"container\">
        <div class=\"bt-final-content text-center\">
          <h2 class=\"bt-final-title\">
            La inversión social impulsa a los talentos de la Ingeniería, fortalece su formación y
            proyecta comunidades con más oportunidades. Invertir en talento es invertir en el futuro,
            y ese futuro comienza hoy. Cada logro abre la puerta a nuevas posibilidades.
            Súmate y sé parte de la próxima historia.
          </h2>

          <a href=\"";
        // line 286
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>") . "implusa-talento"), "html", null, true);
        yield "\"
            class=\"btn btn-light btn-lg bt-final-btn\"
            aria-label=\"Quiero apoyar a un joven de región\">
            <strong>Impulsa el talento aquí</strong>
          </a>
        </div>
      </div>
    </section>


    ";
        // line 297
        yield "    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 297), "html", null, true);
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
        // line 339
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Fundación ACRES. Todos los derechos reservados.</small>
        </div>
      </div>
    </div>
  </footer>


    <js-bottom-placeholder token=\"";
        // line 346
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
        return "themes/custom/guillermina_theme/templates/page--node--3.html.twig";
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
        return array (  714 => 346,  704 => 339,  658 => 297,  645 => 286,  630 => 274,  627 => 273,  617 => 265,  613 => 264,  609 => 263,  605 => 262,  601 => 261,  597 => 260,  593 => 259,  589 => 258,  585 => 257,  581 => 256,  577 => 255,  573 => 254,  569 => 253,  565 => 252,  561 => 251,  557 => 250,  553 => 249,  549 => 248,  545 => 247,  541 => 246,  537 => 245,  533 => 244,  529 => 243,  525 => 242,  521 => 241,  517 => 240,  513 => 239,  509 => 238,  505 => 237,  501 => 236,  497 => 235,  493 => 234,  489 => 233,  485 => 232,  481 => 231,  477 => 230,  473 => 229,  469 => 228,  465 => 227,  461 => 226,  453 => 221,  449 => 220,  445 => 219,  441 => 218,  437 => 217,  433 => 216,  429 => 215,  425 => 214,  421 => 213,  417 => 212,  413 => 211,  409 => 210,  405 => 209,  401 => 208,  397 => 207,  393 => 206,  389 => 205,  385 => 204,  381 => 203,  377 => 202,  373 => 201,  369 => 200,  365 => 199,  361 => 198,  357 => 197,  353 => 196,  349 => 195,  345 => 194,  341 => 193,  337 => 192,  333 => 191,  329 => 190,  325 => 189,  321 => 188,  317 => 187,  313 => 186,  309 => 185,  305 => 184,  301 => 183,  297 => 182,  270 => 158,  252 => 143,  234 => 128,  213 => 109,  203 => 101,  187 => 89,  178 => 80,  171 => 76,  167 => 75,  161 => 72,  147 => 61,  138 => 55,  130 => 50,  127 => 49,  122 => 46,  108 => 35,  103 => 32,  89 => 20,  85 => 19,  81 => 17,  75 => 13,  70 => 11,  64 => 8,  60 => 7,  56 => 6,  52 => 5,  47 => 3,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/guillermina_theme/templates/page--node--3.html.twig", "C:\\xampp\\htdocs\\guillermina\\web\\themes\\custom\\guillermina_theme\\templates\\page--node--3.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 3, "safe_join" => 6, "t" => 13, "date" => 339];
        static $functions = ["path" => 19];

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
