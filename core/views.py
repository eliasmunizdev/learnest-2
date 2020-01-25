from django.shortcuts import render
from django.views.generic.base import TemplateView
from django.contrib.auth import logout as auth_logout
from django.http import HttpResponseRedirect
from django.contrib.auth.decorators import login_required
from django.urls import reverse


class HomePageView(TemplateView):

    template_name = "core/home.html"

    # Redefinimos el diccionario de Contexto
    def get(self, request):
        # el 3er parametro es el dic de contexto
        return render(request, self.template_name, {'title': 'Mi superweb playground'})


''' 
    Otra forma 
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['title'] = "Mi superweb Playground"
        return context
'''


class SamplePageView(TemplateView):

    template_name = "core/sample.html"


def logout(request):
    auth_logout(request)
    return render(request, 'core/base.html')


def inicio(request):
    return HttpResponseRedirect(
        reverse('core/base.html',
                args=[request.user.username]))
