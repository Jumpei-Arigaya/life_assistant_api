from rest_framework import routers
from .views import MemoViewSet, TodoViewSet

router = routers.DefaultRouter()
router.register("memo", MemoViewSet)
router.register("todo", TodoViewSet)
urlpatterns = router.urls
