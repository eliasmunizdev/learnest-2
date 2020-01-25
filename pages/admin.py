from django.contrib import admin
from .models import Page

# Register your models here.


class PageAdmin(admin.ModelAdmin):
    admin.site.site_header = 'Sistema de Asociados de Learnest'
    list_display = ('title', 'client')


admin.site.register(Page, PageAdmin)
