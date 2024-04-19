from rest_framework import viewsets, status
from rest_framework.response import Response
from .models import Memo
from .serializers import MemoSerializer


class MemoViewSet(viewsets.ModelViewSet):
    serializer_class = MemoSerializer
    queryset = Memo.objects.all()

    def create(self, request, *args, **kwargs):
        Memo.objects.all().delete()
        serializer = self.get_serializer(data=request.data)
        serializer.is_valid(raise_exception=True)
        self.perform_create(serializer)
        headers = self.get_success_headers(serializer.data)
        return Response(
            serializer.data, status=status.HTTP_201_CREATED, headers=headers
        )
