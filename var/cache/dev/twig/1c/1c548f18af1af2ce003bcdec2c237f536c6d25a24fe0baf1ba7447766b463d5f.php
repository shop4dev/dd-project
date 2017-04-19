<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e19945631fbccf073be34e34efbbb6682d7b6a5587abb5ecd23dd7bdcb80521a extends Twig_Template
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
        $__internal_3d80c5040c8a22781d18aeee7a1ad2f596b210c45f377ba72970fcc2c5ccd86b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d80c5040c8a22781d18aeee7a1ad2f596b210c45f377ba72970fcc2c5ccd86b->enter($__internal_3d80c5040c8a22781d18aeee7a1ad2f596b210c45f377ba72970fcc2c5ccd86b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_cd7d8d0b35a9c85d7b2d3acb5c52d67e4c77f999919cc107e63e4eee4d28b575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7d8d0b35a9c85d7b2d3acb5c52d67e4c77f999919cc107e63e4eee4d28b575->enter($__internal_cd7d8d0b35a9c85d7b2d3acb5c52d67e4c77f999919cc107e63e4eee4d28b575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3d80c5040c8a22781d18aeee7a1ad2f596b210c45f377ba72970fcc2c5ccd86b->leave($__internal_3d80c5040c8a22781d18aeee7a1ad2f596b210c45f377ba72970fcc2c5ccd86b_prof);

        
        $__internal_cd7d8d0b35a9c85d7b2d3acb5c52d67e4c77f999919cc107e63e4eee4d28b575->leave($__internal_cd7d8d0b35a9c85d7b2d3acb5c52d67e4c77f999919cc107e63e4eee4d28b575_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/tommar5/dd-project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
