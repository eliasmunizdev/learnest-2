from django.db import models
from ckeditor.fields import RichTextField


class Page(models.Model):
    title = models.CharField(verbose_name="Título", max_length=200)
    content = RichTextField(verbose_name="Contenido")
    link = models.URLField(
        verbose_name="Link de pago", max_length=200)
    THEME_CHOICES = (
        ('navega_panama', 'Panama'),
        ('navega_rep_dom', 'Dominicana'),
        ('navega_guatemala', 'Guatemala'),
    )
    client = models.CharField(verbose_name="Cliente",
                              max_length=20, choices=THEME_CHOICES)
    price = models.DecimalField(
        max_digits=8,
        decimal_places=2)
    created = models.DateTimeField(
        auto_now_add=True, verbose_name="Fecha de creación")
    updated = models.DateTimeField(
        auto_now=True, verbose_name="Fecha de edición")

    class Meta:
        verbose_name = "página"
        verbose_name_plural = "páginas"
        ordering = ['title', 'client']

    def __str__(self):
        return self.title
