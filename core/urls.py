from django.urls import path
from .views import logout, inicio

urlpatterns = [
    #path('', HomePageView.as_view(), name="home"),
    #path('sample/', SamplePageView.as_view(), name="sample"),
    path('logout/', logout, name="logout"),
    path('inicio/', inicio, name="inicio"),
]
