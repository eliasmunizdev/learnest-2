# Generated by Django 3.0.2 on 2020-01-24 19:51

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('pages', '0001_initial'),
    ]

    operations = [
        migrations.AddField(
            model_name='page',
            name='url_pago',
            field=models.CharField(default=0, max_length=200, verbose_name='Link de pago'),
        ),
    ]
