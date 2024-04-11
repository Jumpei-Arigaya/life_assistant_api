from django.contrib import admin
from django.urls import path, include
from django.contrib.auth.models import User
from rest_framework import routers

# Routers provide an easy way of automatically determining the URL conf.
router = routers.DefaultRouter()

# Wire up our API using automatic URL routing.
# Additionally, we include login URLs for the browsable API.
urlpatterns = [
    path("admin/", admin.site.urls),
    path("", include(router.urls)),
    path(
        "api/",
        include(
            "api.urls",
        ),
    ),
    path("api-auth/", include("rest_framework.urls", namespace="rest_framework")),
]
